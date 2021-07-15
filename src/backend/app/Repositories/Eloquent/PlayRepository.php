<?php

namespace App\Repositories\Eloquent;

use App\Contract\Repository\PlayRepositoryInterface;
use App\Http\Requests\PlayRequest;
use App\Models\Play;
use Illuminate\Support\Facades\DB;

class PlayRepository extends BaseRepository implements PlayRepositoryInterface
{
    public function __construct(Play $model)
    {
        parent::__construct($model);
    }

    public function play(PlayRequest $request)
    {
        $meditationId = $request->meditation_id;
        $userId = auth()->user()->id;
        $duration = $request->duration;

        return $this->create(
            [
                'meditation_id' => $meditationId,
                'user_id' => $userId,
                'duration' => $duration
            ]
        )->toArray();
    }

    /**
     * Get meditation duration for last 7 days
     **/
    public function history()
    {
        $date = \Carbon\Carbon::today()->subDays(7);

        return $this->model
            ->where('created_at', '>=', $date)
            ->groupBy('date')
            ->get(
                [
                    DB::raw('DATE(created_at) as date'),
                    DB::raw('SUM(duration) as total_duration')
                ]
            )->toArray();
    }

    /**
     * Get meditation duration for calendar
     * @param \DateTimeInterface $previousDate
     * @param \DateTimeInterface $addedDate
     * @return mixed
     */
    public function calendar(\DateTimeInterface $previousDate, \DateTimeInterface $addedDate)
    {
        #$previousDate = \Carbon\Carbon::today()->subDays(30);
        #$addedDate = \Carbon\Carbon::today()->addDays(30);

        return $this->model
            ->where('created_at', '>=', $previousDate)
            ->where('created_at', '<=', $addedDate)
            ->groupBy('date')
            ->get(
                [
                    DB::raw('DATE(created_at) as date'),
                    DB::raw('SUM(duration) as total_duration')
                ]
            )->toArray();
    }

    public function stats(\DateTime $startedAt, \DateTime $finishedAt)
    {
        $result = DB::select(
            "SELECT COUNT(*) as totalMeditation,
                        SUM(m.duration) as totalDuration
                    FROM plays as p
                    JOIN meditations as m ON m.id=p.meditation_id
                    WHERE DATE(p.created_at) BETWEEN ? AND ?",
            [
                $startedAt->format('Y-m-d'),
                $finishedAt->format('Y-m-d')
            ]
        );

        return current($result);
    }
}
