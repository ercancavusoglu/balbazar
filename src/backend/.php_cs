<?php

$finder = PhpCsFixer\Finder::create()
    ->notPath('_ide_helper.php')
    ->ignoreVCSIgnored(true)
    ->in(__DIR__);

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules(
        [
            '@PSR2' => true,
            '@PSR1' => true,

            'phpdoc_var_without_name'                    => true,
            'phpdoc_var_annotation_correct_order'        => true,
            'phpdoc_scalar'                              => true,
            'phpdoc_no_useless_inheritdoc'               => true,
            'no_superfluous_elseif'                      => true,
            'no_spaces_around_offset'                    => true,
            'no_singleline_whitespace_before_semicolons' => true,
            'multiline_whitespace_before_semicolons'     => true,

            'indentation_type'     => true,
            'strict_param'         => true,  //
            'declare_strict_types' => true,  // Always declare STRICT types
            'constant_case'        => [
                'case' => 'lower'               // PHP contants should be in lower case (TRUE => true, FALSE => false)
            ],
            'concat_space'         => [
                'spacing' => 'one'
            ],

            'cast_spaces'                       => [
                'space' => 'none'
            ],
            'static_lambda'                     => true,
            'single_trait_insert_per_statement' => true,

            'array_syntax' => ['syntax' => 'short'],

            'align_multiline_comment'                          => true,
            'array_indentation'                                => true,
            'blank_line_after_opening_tag'                     => true,
            'blank_line_after_namespace'                       => true,
            'class_attributes_separation'                      => true,
            'comment_to_phpdoc'                                => [
                'ignored_tags' => ['todo', 'TODO']
            ],
            'compact_nullable_typehint'                        => true,
            'declare_equal_normalize'                          => [
                'space' => 'none'
            ],
            'encoding'                                         => true,
            'error_suppression'                                => [
                'mute_deprecation_error' => true,
                'noise_remaining_usages' => true
            ],
            'escape_implicit_backslashes'                      => true,
            'explicit_indirect_variable'                       => true,
            'final_static_access'                              => true,
            'fully_qualified_strict_types'                     => true,
            'function_declaration'                             => true,
            'function_to_constant'                             => true,
            'function_typehint_space'                          => true,
            'general_phpdoc_annotation_remove'                 => [
                'annotations' => ['inheritdoc', 'inheritDoc']
            ],
            'global_namespace_import'                          => [
                'import_classes'   => true,
                'import_constants' => true,
                'import_functions' => true
            ],
            'implode_call'                                     => true,
            'is_null'                                          => true,
            'line_ending'                                      => true,
            'linebreak_after_opening_tag'                      => true,
            'list_syntax'                                      => ['syntax' => 'short'],
            'logical_operators'                                => true,
            'lowercase_cast'                                   => true,
            'lowercase_keywords'                               => true,
            'lowercase_static_reference'                       => true,
            'magic_constant_casing'                            => true,
            'magic_method_casing'                              => true,
            'method_chaining_indentation'                      => true,
            'modernize_types_casting'                          => true,
            'native_function_casing'                           => true,
            'native_function_type_declaration_casing'          => true,
            'new_with_braces'                                  => true,
            'no_alias_functions'                               => true,
            'no_binary_string'                                 => true,
            'no_blank_lines_after_class_opening'               => true,
            'no_blank_lines_after_phpdoc'                      => true,
            'no_blank_lines_before_namespace'                  => false,
            'no_empty_comment'                                 => true,
            'no_empty_phpdoc'                                  => true,
            'no_closing_tag'                                   => true,
            'no_empty_statement'                               => true,
            'no_extra_blank_lines'                             => true,
            'no_homoglyph_names'                               => true,
            'no_leading_import_slash'                          => true,
            'no_leading_namespace_whitespace'                  => true,
            'no_mixed_echo_print'                              => true,
            'no_multiline_whitespace_around_double_arrow'      => false,
            'no_multiline_whitespace_before_semicolons'        => true,
            'no_null_property_initialization'                  => true,
            'no_php4_constructor'                              => true,
            'no_short_bool_cast'                               => true,
            'no_short_echo_tag'                                => true,
            'no_spaces_after_function_name'                    => true,
            'no_spaces_inside_parenthesis'                     => true,
            'no_trailing_comma_in_list_call'                   => true,
            'no_trailing_comma_in_singleline_array'            => true,
            'no_trailing_whitespace'                           => true,
            'no_trailing_whitespace_in_comment'                => true,
            'no_unneeded_curly_braces'                         => [
                'namespaces' => true,
            ],
            'no_unneeded_final_method'                         => true,
            'no_unset_cast'                                    => true,
            'no_unset_on_property'                             => true,
            'no_unused_imports'                                => true,
            'no_useless_else'                                  => true,
            'no_useless_return'                                => true,
            'no_whitespace_before_comma_in_array'              => true,
            'no_whitespace_in_blank_line'                      => true,
            'non_printable_character'                          => true,
            'normalize_index_brace'                            => true,
            'nullable_type_declaration_for_default_null_value' => true,
            'object_operator_without_whitespace'               => true,

            'ordered_class_elements'              => true,
            'ordered_imports'                     => true,
            'ordered_interfaces'                  => true,
            'phpdoc_add_missing_param_annotation' => true,
            // 'phpdoc_align' => true,
            'phpdoc_indent'                       => true,
            'phpdoc_line_span'                    => ['method' => 'multi', 'const' => 'multi', 'property' => 'multi'],
            'phpdoc_no_empty_return'              => true,
            'phpdoc_order'                        => true,
            'phpdoc_return_self_reference'        => true,
            'phpdoc_trim'                         => true,
            'phpdoc_types'                        => true,
            'phpdoc_types_order'                  => [
                'sort_algorithm'  => 'alpha',
                'null_adjustment' => 'always_last'
            ],
            'protected_to_private'                => true,
            'random_api_migration'                => true,
            'return_assignment'                   => true,
            'return_type_declaration'             => true,
            'self_accessor'                       => true,
            'self_static_accessor'                => true,
            'semicolon_after_instruction'         => true,
            'short_scalar_cast'                   => true,
            'simple_to_complex_string_variable'   => true,
            'simplified_null_return'              => true,
            'single_blank_line_before_namespace'  => true,
            'single_line_comment_style'           => true,
            'single_quote'                        => true,
            'space_after_semicolon'               => true,
            'standardize_increment'               => true,
            'standardize_not_equals'              => true,
            'strict_comparison'                   => true,
            'switch_case_semicolon_to_colon'      => true,
            'switch_case_space'                   => true,
            'ternary_operator_spaces'             => true,
            'ternary_to_null_coalescing'          => true,
            'trim_array_spaces'                   => true,
            'unary_operator_spaces'               => true,
            'visibility_required'                 => true,
            'void_return'                         => true,
            'whitespace_after_comma_in_array'     => true
        ]
    )
    ->setFinder($finder);
