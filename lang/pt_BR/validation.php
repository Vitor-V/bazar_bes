<?php
return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | such as the size rules. Feel free to tweak each of these messages.
    |
    */
    'accepted' => 'O campo :attribute deve ser aceito.',
    'active_url' => 'O campo :attribute deve conter uma URL válida.',
    'after' => 'O campo :attribute deve conter uma data posterior a :date.',
    'after_or_equal' => 'Deve conter uma data superior ou igual a :date.',
    'alpha' => 'O campo :attribute deve conter apenas letras.',
    'alpha_dash' => 'O campo :attribute deve conter apenas letras, números e traços.',
    'alpha_num' => 'O campo :attribute deve conter apenas letras e números.',
    'array' => 'O campo :attribute deve conter um array.',
    'base64_image' => 'O campo :attribute deve conter uma imagem.',
    'before' => 'Deve conter uma data igual ou inferior a :date.',
    'before_or_equal' => 'O campo :attribute deve conter uma data inferior ou igual a :date.',
    'between' => [
        'numeric' => 'O campo :attribute deve conter um número entre :min e :max.',
        'file' => 'O campo :attribute deve conter um arquivo de :min a :max kilobytes.',
        'string' => 'O campo :attribute deve conter entre :min a :max caracteres.',
        'array' => 'O campo :attribute deve conter de :min a :max itens.',
    ],
    'boolean' => 'O campo :attribute deve conter o valor sim ou não.',
    'cep' => 'O :attribute informado não é válido.',
    'zip_code' => 'O :attribute informado não existe.',
    'confirmed' => 'A confirmação para o campo :attribute não coincide.',
    'cpf_format' => 'O :attribute informado não tem o formato válido.',
    'cpf' => 'O CPF informado não é válido.',
    'cnpj_format' => 'O :attribute informado não tem o formato válido.',
    'cnpj' => 'O :attribute informado não contém um CNPJ válido.',
    'date' => 'O campo :attribute não contém uma data válida.',
    'date_format' => 'O campo :attribute não respeita o formato :format.',
    'different' => 'Os campos :attribute e :other devem conter valores diferentes.',
    'digits' => 'O campo :attribute deve conter :digits dígitos.',
    'digits_between' => 'O campo :attribute deve conter entre :min a :max dígitos.',
    'dimensions' => 'O valor informado para o campo :attribute não é uma dimensão de imagem válida.',
    'distinct' => 'O campo :attribute contém um valor duplicado.',
    'email' => 'O campo :attribute não contém um endereço de email válido.',
    'exists' => 'O campo :attribute é inválido.',
    'file' => 'O campo :attribute deve conter um arquivo.',
    'filled' => 'O campo :attribute é obrigatório.',
    'image' => 'O campo :attribute deve conter uma imagem.',
    'in' => 'O campo :attribute não contém um valor válido.',
    'in_array' => 'O campo :attribute não existe em :other.',
    'integer' => 'O campo :attribute deve conter um número inteiro.',
    'ip' => 'O campo :attribute deve conter um IP válido.',
    'json' => 'O campo :attribute deve conter uma string JSON válida.',
    'max' => [
        'numeric' => 'O campo :attribute não pode conter um valor superior a :max.',
        'file' => 'O campo :attribute não pode conter um arquivo com mais de :max kilobytes.',
        'string' => 'O campo :attribute não pode conter mais de :max caracteres.',
        'array' => 'O campo :attribute deve conter no máximo :max itens.',
    ],
    'mimes' => 'O campo :attribute deve conter um arquivo do tipo: :values.',
    'mimetypes' => 'O campo :attribute deve conter um arquivo do tipo: :values.',
    'min' => [
        'numeric' => 'O campo :attribute deve conter um número superior ou igual a :min.',
        'file' => 'O campo :attribute deve conter um arquivo com no mínimo :min kilobytes.',
        'string' => 'O campo :attribute deve conter no mínimo :min caracteres.',
        'array' => 'O campo :attribute deve conter no mínimo :min itens.',
    ],
    'money' => 'O valor do campo :attribute não está no formato de dinheiro (000,00)',
    'not_in' => 'O campo :attribute contém um valor inválido.',
    'numeric' => 'O campo :attribute deve conter um valor numérico.',
    'phone' => 'O campo :attribute não contém um número de telefone válido.',
    'present' => 'O campo :attribute deve estar presente.',
    'regex' => 'O formato do valor informado no campo :attribute é inválido.',
    'required' => 'O campo :attribute é obrigatório.',
    'required_if' => 'O campo :attribute é obrigatório quando o valor do campo :other é igual a :value.',
    'required_unless' => 'O campo :attribute é obrigatório a menos que :other esteja presente em :values.',
    'required_with' => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_with_all' => 'O campo :attribute é obrigatório quando um dos :values está presente.',
    'required_without' => 'O campo :attribute é obrigatório quando :values não está presente.',
    'required_without_all' => 'O campo :attribute é obrigatório quando nenhum dos :values está presente.',
    'same' => 'Os campos :attribute e :other devem conter valores iguais.',
    'size' => [
        'numeric' => 'O campo :attribute deve conter o número :size.',
        'file' => 'O campo :attribute deve conter um arquivo com o tamanho de :size kilobytes.',
        'string' => 'O campo :attribute deve conter :size caracteres.',
        'array' => 'O campo :attribute deve conter :size itens.',
    ],
    'string' => 'O campo :attribute deve ser uma string.',
    'timezone' => 'O campo :attribute deve conter um fuso horário válido.',
    'unique' => 'O :attribute informado já está em uso.',
    'uploaded' => 'Falha no Upload do arquivo :attribute.',
    'url' => 'O formato da URL informada para o campo :attribute é inválido.',
    'base64_kml' => 'Arquivo KML invalido',
    'location' => [
        'cep_search' => [
            'no_cep_provided' => 'O filtro de busca é obrigatório!',
            'no_address_found' => 'Não encontramos nenhum endereço neste CEP.',
        ],
        'address_search' => [
            'no_address_provided' => 'O filtro de busca é obrigatório!',
            'no_address_found' => 'Não encontramos nenhum endereço.',
        ],
    ],
    'base64_file_size' => 'O aquivo deve ser menor que :file_size.',
    'invalid_parameters' => 'Parâmetros inválidos, entre em contato com o suporte',
    'base64_documents' => 'Formato de arquivo não suportado',


    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
        // Namespaced validations
        'business_unit_procedure' => [
            'update_partner_costs' => [
                'cost_must_be_higher' => 'O valor do custo total deve ser maior que o valor do repasse.',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */
    'attributes' => [
        'address_id' => 'endereço',
        'address' => 'endereço',
        'address_number' => 'número do endereço',
        'address_district' => 'bairro',
        'age' => 'idade',
        'body' => 'conteúdo',
        'birth_date' => 'data de nascimento',
        'cep' => 'CEP',
        'city' => 'cidade',
        'city_id' => 'cidade',
        'country' => 'país',
        'cost' => 'custo',
        'cpf' => 'CPF',
        'cnpj' => 'CNPJ',
        'date' => 'data',
        'day' => 'día',
        'description' => 'descrição',
        'excerpt' => 'resumo',
        'email' => 'e-mail',
        'facebook_page' => 'página do facebook',
        'fathers_name' => 'nome do pai',
        'first_name' => 'primeiro nome',
        'gender' => 'gênero',
        'hour' => 'hora',
        'installments' => 'parcelas',
        'last_name' => 'sobrenome',
        'marital_status' => 'estado civil',
        'message' => 'mensagem',
        'minute' => 'minuto',
        'mobile' => 'celular',
        'mothers_name' => 'nome da mãe',
        'month' => 'mês',
        'name' => 'nome',
        'observation' => 'observações',
        'password_confirmation' => 'confirmação da senha',
        'password' => 'senha',
        'permission' => 'permissão',
        'phone' => 'telefone',
        'phone1' => 'telefone',
        'phone2' => 'telefone',
        'phone3' => 'telefone',
        'phone4' => 'telefone',
        'platform' => 'plataforma',
        'rg' => 'RG',
        'second' => 'segundo',
        'sex' => 'sexo',
        'state' => 'estado',
        'subject' => 'assunto',
        'time' => 'hora',
        'title' => 'título',
        'username' => 'usuário',
        'year' => 'ano',

        'budgets' => 'Orçamentos',
        'admin_email' => 'email do administrador',
        'admin_name' => 'nome do administrador',
        'admin_password' => 'senha do administrador',
        'business_unit_cost' => 'custo total',
        'business_unit_id' => 'unidade',
        'business_unit_origin_id' => 'Unidade de origem',
        'business_unit_destination_id' => 'Unidade de destino',
        'business_unit_ids' => 'unidade',
        'health_partner_id' => 'parceiro',
        'health_professional_id' => 'profissional',
        'marketing_channel_id' => 'canal de marketing',
        'medical_procedure_id' => 'procedimento',
        'payment_method_id' => 'forma de pagamento',
        'partner_id' => 'parceiro',
        'procedure_id' => 'procedimento',
        'professional_cost' => 'repasse do parceiro',
        'professional_id' => 'profissional',
        'specialization_id' => 'especialidade',
        'value' => 'montante',
        'tracking_code' => 'Código de rastreamento',
        'crm' => 'CRM',
        'cro' => 'CRO',
        'code' => 'Código',
        'document_code' => 'Documento',
        'service_location_id' => 'Local de atendimento',
        'value_removal' => 'Retirada',
        'value_start' => 'Fundo de caixa',

        // BusinessUnit
        'credencial_print_config' => 'Modelo de cartão Solumedi',
        'voucher_print_config' => 'Impressão do recibo do usuário',
        'cash_register' => 'Controle de caixa',
        'business_hour_lock_enabled' => 'Bloqueio de acesso ao sistema',
        'business_hour_lock_days' => 'Dias da semana',
        'business_hour_lock_start_time' => 'Horário início',

        'origin_bank_account_id' => 'Conta de origem',
        'destination_bank_account_id' => 'Conta destino',


        'budget_config_discount.tax_retention' => 'Retenção',
        'budget_config_discount.discount_type' => 'Tipo de desconto',
        'budget_config_discount.discount' => 'Desconto',
        'budget_config_discount.tax_tribute' => 'Valor não tributado',
        'account_color' => 'cor da conta',
        'schooling' => 'Grau de instrução',
        'weight' => 'peso',
        'price_sale' => 'valor',
        'key' => 'chave',
        'canceled_motive_id' => 'motivo do cancelamento',
        'effective_date' => 'data de competência',
        'user_email' => 'e-mail de usuário',
        'address_type' => 'tipo de endereço',
        'dates' => 'data do atendimento',
        'address.street' => 'endereço',
        'address.number' => 'número',
        'address.district' => 'bairro',
        'address.city_id' => 'cidade',
        'zones' => 'áreas',
        'auth_code' => 'código de autenticação',
        'outsourcing_contract_id' => 'contrato',
        'provider_origin_id' => 'profissional',
        'start_time' => 'hora inicial',
        'end_time' => 'hora final',
        'shifts' => 'turnos',
        'client_address_id' => 'endereço',
        'passport' => 'passaporte',
        'marketing.campaign_tag' => 'tag da campanha',

        'main_answer.main_note' => 'Nota principal',
        'main_answer.csat_question_id' => 'Questão principal',
        'answers.*.answer' => 'resposta',
        'answers.*.csat_question_id' => 'questão',

    ],

    'pag_certo' => [
        'wrong_password' => 'Senha incorreta',
        'unauthorized_access' => 'Acesso não autorizado',
    ],

    'client' => [
        'client_exists_database' => 'Esses dados já estão em uso. Por favor, entre em contato com nosso time de atendimento através do chat disponível nessa tela.',
        'client_exists_database_request_password' => 'Já existe um cadastro com esses dados. Você deve fazer acesso através da tela de login, se não recordar a senha use a opção de recuperar senha.',
        'sent_email_complete_registration' => 'Enviamos para seu e-mail um link para completar seu cadastro para que possa concluir sua compra aqui no site.',
        'error_complete_registration' => 'Esses dados já estão em uso. Por favor, entre em contato com nosso time de atendimento através do chat disponível nessa tela.',
    ],

    'app_client' => [
        'client_exists_database' => 'Esses dados já estão em uso. Por favor entrar em contato com o suporte através do site www.mariabrasileira.com.br',
        'client_exists_database_request_password' => 'Já existe um cadastro com esses dados. Você deve fazer acesso através da tela de login, se não recordar a senha use a opção de recuperar senha.',
    ],

    'financial_transactions' => [
        'account_without_pix' => 'Erro ao gerar cobrança, essa unidade não possui PIX cadastrado!',
        'datetime_greater_than_or_equal_to' => 'A data deve ser maior ou igual a :date.'
    ],

    'csat_answers' => [
        'invalid_format' => 'Formato de resposta inválido'
    ]
];
