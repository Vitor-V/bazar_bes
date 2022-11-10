<?php

return [
    'http' => [
        'controllers' => [
            'api' => [
                'checkout' => [
                    'subscriptions_controller' => [
                        'create' => [
                            'success' => 'Agendamento realizado com sucesso.'
                        ]
                    ]
                ],
                'client' => [
                    'pet_controller' => [
                        'register' => [
                            'success' => 'Pet cadastrado.',
                        ],
                        'update' => [
                            'success' => 'Pet atualizado.',
                        ],
                        'delete' => [
                            'success' => 'Pet deletado.',
                        ],
                    ],
                    'facebook_controller' => [
                        'associate' => [
                            'success' => 'Conta do facebook associada.',
                        ],
                        'disassociate' => [
                            'success' => 'Conta do facebook esquecida.',
                        ],
                    ],
                    'feed' => [
                        'posts_controller' => [
                            'like' => [
                                'success' => 'Publicação marcada como "gostei".',
                            ],
                            'dislike' => [
                                'success' => 'Publicação marcada como "não gostei".',
                            ],
                            'destroy_like' => [
                                'success' => 'Removida marcação de "gostei".',
                            ],
                            'destroy_dislike' => [
                                'success' => 'Removida marcação de "não gostei".',
                            ],
                        ],
                    ],
                    'solumedi' => [
                        'attendance_requests_controller' => [
                            'create' => [
                                'success' => 'Atendimento solicitado.',
                            ],
                        ],
                    ],
                    'attendances_controller' => [
                        'create' => [
                            'success' => 'Atendimento cadastrado com sucesso.',
                        ],
                        'cancel' => [
                            'success' => 'Atendimento cancelado com sucesso.',
                        ],
                    ],
                    'attendances' => [
                        'payments_controller' => [
                            'create' => [
                                'success' => 'Pagamento realizado com sucesso.',
                            ],
                        ],
                    ],
                ],
                'business_unit' => [
                    'attendances' => [
                        'payments_controller' => [
                            'create' => [
                                'success' => 'Pagamento cadastrado.',
                            ],
                        ],
                        'budgets_controller' => [
                            'create' => [
                                'success' => 'Orçamento cadastrado.',
                            ],
                            'update' => [
                                'success' => 'Orçamento atualizado.',
                            ],
                            'show_preview' => [
                                'success' => 'Gerada pré-visualização.',
                            ],
                            'process' => [
                                'success' => 'Atendimento gerado.',
                            ],
                            'delete' => [
                                'success' => 'Orçamento excluído.',
                            ],
                            'cancel' => [
                                'success' => 'Orçamento cancelado.',
                            ],
                        ],
                    ],
                    'attendances_controller' => [
                        'create' => [
                            'success' => 'Atendimento iniciado.',
                        ],
                        'update' => [
                            'success' => 'Atendimento atualizado.',
                        ],
                        'attendance_send_email' => [
                            'success' => 'E-mail enviado.',
                        ],
                    ],
                    'clients_controller' => [
                        'create' => [
                            'success' => 'Habilidade registrado.',
                        ],
                        'update' => [
                            'success' => 'Habilidade atualizado.',
                        ],
                    ],
                    'employees_controller' => [
                        'create' => [
                            'success' => 'Colaborador cadastrado.',
                        ],
                        'update' => [
                            'success' => 'Colaborador atualizado.',
                        ],
                    ],
                    'health_partners_controller' => [
                        'create' => [
                            'success' => 'Parceiro cadastrado.',
                        ],
                        'update' => [
                            'success' => 'Parceiro atualizado.',
                        ],
                    ],
                    'settings' => [
                        'parameters_controller' => [
                            'update' => [
                                'success' => 'Configurações atualizadas.',
                            ],
                        ],
                    ],
                    'campaigns_controller' => [
                        'create' => [
                            'success' => 'Campanha cadastrado.',
                        ],
                        'update' => [
                            'success' => 'Campanha atualizada.',
                        ],
                        'delete' => [
                            'success' => 'Campanha removida.',
                        ],
                    ],
                    'business_units' => [
                        'business_unit_bank_accounts_controller' => [
                            'create' => [
                                'success' => 'Sua conta bancária foi cadastrada com sucesso.',
                            ],
                            'update' => [
                                'success' => 'Sua conta bancária foi atualizada com sucesso.',
                            ],
                            'delete' => [
                                'success' => 'Sua conta bancária foi removida com sucesso.',
                            ],
                        ],
                        'business_unit_digital_bank_accounts_controller' => [
                            'update_login_and_password' => [
                                'success' => 'Sua conta bancária foi atualizada com sucesso.',
                            ]
                        ]
                    ],
                    'order_services' => [
                        'order_services_controller' => [
                            'change_payment' => [
                                'success' => 'Troca de serviço efetuada.',
                            ],
                            'create_from_budget' => [
                                'success' => 'Atendimento cadastrado.',
                            ]
                        ],
                    ],
                    'coupons' => [
                        'coupons_controller' => [
                            'create' => [
                                'success' => 'Cupom cadastrado com sucesso',
                            ],
                            'update' => [
                                'success' => 'Cupom atualizado com sucesso',
                            ],
                        ]
                    ],
                    'finances' => [
                        'budget_payments_contoller' => [
                            'update' => [
                                'success' => 'Cobrança atualizada com sucesso!',
                            ]
                        ],
                        'withdraw_controller' => [
                            'claim_withdraw_pix' => [
                                'success' => 'Seu resgate está sendo processado!'
                            ]
                        ]
                    ],
                    'marketplace' => [
                        'marketplace_budgets_controller' => [
                            'create' => [
                                'success' => 'Solicitação enviada com sucesso'
                            ]

                        ]
                    ],
                    'bank_transfer_controller' => [
                        'store' => [
                            'success' => 'Movimentação salva com sucesso!',
                        ],
                        'delete' => [
                            'success' => 'Movimentação removida com sucesso!',
                        ],
                    ],
                    'outsourcing_contracts' => [
                        'outsourcing_contracts_controller' => [
                            'destroy' => [
                                'success' => 'Contrato encerrado com sucesso'
                            ]
                        ],
                        'outsourcing_contract_discount_controller' => [
                            'store' => [
                                'success' => 'Desconto/Acréscimo criado com sucesso'
                            ],
                            'destroy' => [
                                'success' => 'Desconto/Acréscimo removido com sucesso'
                            ]
                        ]
                    ],
                ],
                'feed' => [
                    'posts_controller' => [
                        'like' => [
                            'success' => 'Publicação marcada como "gostei".',
                        ],
                        'dislike' => [
                            'success' => 'Publicação marcada como "não gostei".',
                        ],
                        'destroy_like' => [
                            'success' => 'Removida marcação de "gostei".',
                        ],
                        'destroy_dislike' => [
                            'success' => 'Removida marcação de "não gostei".',
                        ],
                    ],
                ],
                'headquarter' => [
                    'business_units_controller' => [
                        'create' => [
                            'success' => 'Unidade cadastrada.',
                        ],
                        'update' => [
                            'success' => 'Unidade atualizada.',
                        ],
                    ],
                    'health_partners_controller' => [
                        'create' => [
                            'success' => 'Parceiro cadastrado.',
                        ],
                        'update' => [
                            'success' => 'Parceiro atualizado.',
                        ],
                    ],
                    'health_partners' => [
                        'business_units_controller' => [
                            'update' => [
                                'success' => 'Unidades atualizadas.',
                            ],
                        ],
                        'professionals_controller' => [
                            'create' => [
                                'success' => 'Profissional cadastrado.',
                            ],
                            'update' => [
                                'success' => 'Profissional atualizado.',
                            ],
                        ],
                    ],
                    'marketing_channels_controller' => [
                        'create' => [
                            'success' => 'Canal de marketing cadastrado.',
                        ],
                        'update' => [
                            'success' => 'Canal de marketing atualizado.',
                        ],
                    ],
                    'specializations_controller' => [
                        'create' => [
                            'success' => 'Especialidade cadastrada.',
                        ],
                        'update' => [
                            'success' => 'Especialidade atualizada.',
                        ],
                    ],
                    'medical_procedures_controller' => [
                        'create' => [
                            'success' => 'Procedimento médico cadastrado.',
                        ],
                        'update' => [
                            'success' => 'Procedimento médico atualizado.',
                        ],
                    ],
                    'coupons' => [
                        'coupons_controller' => [
                            'create' => [
                                'success' => 'Cupom cadastrado com sucesso',
                            ],
                            'update' => [
                                'success' => 'Cupom atualizado com sucesso',
                            ],
                        ]
                    ],
                    'coverage_city_zones' => [
                        'coverage_city_zones_controllers' => [
                            'store' => [
                                'success' => 'Cidade de abrangência cadastrada com sucesso'
                            ],
                            'delete' => [
                                'success' => 'Cidade de abrangência removida com sucesso'
                            ],
                            'update' => [
                                'success' => 'Cidade de abrangência atualizada com sucesso'
                            ]
                        ]
                    ],
                    'client_posts' => [
                        'client_posts_controller' => [
                            'store' => [
                                'success' => 'Post cadastrado com sucesso.'
                            ],
                            'update' => [
                                'success' => 'Post atualizado com sucesso.'
                            ],
                            'destroy' => [
                                'success' => 'Post removido com sucesso.'
                            ]
                        ]
                    ]
                ],
                'health_partner' => [
                    'attendances' => [
                        'handlers_controller' => [
                            'execute' => [
                                'success' => 'Voucher marcado.',
                            ],
                            'qrcode_execute' => [
                                'success' => 'Voucher marcado.',
                            ],
                        ],
                    ],
                    'attendance_hours_controller' => [
                        'create' => [
                            'success' => 'Horário de atendimento cadastrado.',
                        ],
                        'update' => [
                            'success' => 'Horário de atendimento atualizado.',
                        ],
                    ],
                    'attendance_hours' => [
                        'exceptions_controller' => [
                            'create' => [
                                'success' => 'Exceção de horário cadastrada.',
                            ],
                            'update' => [
                                'success' => 'Exceção de horário atualizada.',
                            ],
                        ],
                    ],
                    'professionals_controller' => [
                        'create' => [
                            'success' => 'Profissional cadastrado.',
                        ],
                        'update' => [
                            'success' => 'Profissional atualizado.',
                        ],
                        'inactivate' => [
                            'success' => 'Profissional inativado.',
                        ],
                    ],
                ],
                'web' => [
                    'headquarter_contacts_controller' => [
                        'create' => [
                            'success' => 'Contato enviado com sucesso.'
                        ]
                    ],
                    'budgets' => [
                        'budgets_controller' => [
                            'store' => [
                                'success' => 'Orçamento realizado com sucesso.'
                            ]
                        ],
                        'leads_controller' => [
                            'store' => [
                                'success' => 'Lead cadastrado com sucesso.'
                            ]
                        ]
                    ],
                    'leads' => [
                        'leads_controller' => [
                            'first_stage' => [
                                'success' => 'Lead cadastrado com sucesso.'
                            ]
                        ]
                    ]
                ]
            ],
            'password_controller' => [
                'request_reset' => [
                    'success' => 'Foi gerado uma nova senha e enviado por e-mail.',
                ],
            ],
            'web' => [
                'tracking_controller' => [
                    'index' => [
                        'success' => 'Localização do pet salva.',
                    ],
                    'update' => [
                        'success' => 'Mensagem enviada com sucesso.',
                    ],
                    'create' => [
                        'success' => 'Mensagem enviada com sucesso.',
                    ],
                ],
                'client' => [
                    'confirmations' => [
                        'email' => [
                            'success' => 'Tudo certo por aqui. Seu e-mail foi confirmado com sucesso. Até mais.',
                            'error' => 'Ops! esse link me parece não ser mais valido. Até logo.'
                        ]
                    ]
                ],
            ],
            'web_hook' => [
                'iugu_webhook_controller' => [
                    'invoices' => [
                        'success' => 'Dados recebidos com sucesso',
                    ],
                ],
            ],
            'checkout_api' => [
                'checkout_subscriptions_controller' => [
                    'create' => [
                        'success' => 'Compra realizada com sucesso'
                    ]
                ]
            ]
        ],
    ],
    'exceptions' => [
        'handler' => [
            'action_not_found' => 'Recurso não encontrado.',
            'record_not_found' => 'Registro não encontrado.',
            'file_not_found' => 'Arquivo não encontrado.',
            'unauthenticated' => 'Você não está autenticado.',
            'internal_server_error' => 'Erro interno. Por favor, entre em contato com o suporte.',
            'invalid' => 'Ops! Algumas informações estão erradas, por favor conferir.',
        ],
    ],
    'operations' => [
        'invalid_params' => 'Parâmetros inválidos.',
        'exceptions' => [
            'validation_exception' => [
                'invalid' => 'Ops! Algumas informações estão erradas, por favor conferir.',
            ],
        ],
        // Namespace das operations, igual nas controllers.
        // Sendo o último nível o tipo da mensagem e o texto da mensagem.
        'business_unit_procedure' => [
            'update_partner_costs' => [
                'professional_procedure_not_found' => 'Tabela de repasse não encontrada.',
            ],
        ],
        'health_professional_procedure' => [
            'create' => [
                'professional_procedure_found' => 'Este item já esta cadastrado cadastrado.',
            ],
        ],
    ],
];
