<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Personal / Contact details
    |--------------------------------------------------------------------------
    */
    'name'      => 'Asha Kumari Meghwal',
    'short'     => 'Asha Meghwal',
    'title'     => 'Laravel Backend Developer',
    'roles'     => [
        'Laravel Backend Developer',
        'PHP Developer',
        'REST API Developer',
    ],
    'tagline'   => 'Building secure, scalable & high-performance backend systems.',
    'location'  => 'Kota, Rajasthan, India',
    'email'     => 'akmeghwal.cool@gmail.com',
    'phone'     => '+91 9352753289',
    'phone_raw' => '919352753289',
    'experience_years' => '3+',

    'summary' => 'Laravel Backend Developer with 3+ years of experience in developing scalable web applications and RESTful APIs using Laravel, PHP, and MySQL. Experienced in backend architecture, authentication & authorization, AI integrations, payment gateway integration, dynamic PDF generation, database optimization, and production deployment. Strong problem-solving skills with a proven record of delivering secure, maintainable, and high-performance backend solutions.',

    /*
    |--------------------------------------------------------------------------
    | Quick stats (Hero highlights)
    |--------------------------------------------------------------------------
    */
    'stats' => [
        ['value' => '3+',  'label' => 'Years Experience'],
        ['value' => '40+', 'label' => 'REST APIs Built'],
        ['value' => '20+', 'label' => 'PDF Modules'],
        ['value' => '12+',  'label' => 'Live Products'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Social / external links
    |--------------------------------------------------------------------------
    */
    'links' => [
        'github'   => 'https://github.com/meghwalasha123',
        'api_docs' => 'https://documenter.getpostman.com/view/22952033/2sA3s4nWfA#b4dc3edc-f3d7-493d-aa82-f90b07c0b4f5',
    ],

    /*
    |--------------------------------------------------------------------------
    | Technical skills (grouped)
    |--------------------------------------------------------------------------
    */
    'skills' => [
        [
            'group' => 'Backend',
            'icon'  => 'server',
            'items' => ['PHP', 'Laravel 9 / 10 / 11 / 12', 'REST APIs', 'MVC Architecture'],
        ],
        [
            'group' => 'Database',
            'icon'  => 'database',
            'items' => ['MySQL', 'Query Optimization', 'Migrations', 'Schema Design'],
        ],
        [
            'group' => 'Frontend',
            'icon'  => 'code',
            'items' => ['HTML5', 'CSS3', 'Bootstrap', 'JavaScript', 'jQuery', 'AJAX'],
        ],
        [
            'group' => 'Integrations',
            'icon'  => 'plug',
            'items' => ['OpenAI API', 'Razorpay', 'PhonePe', 'Cashfree', 'mPDF'],
        ],
        [
            'group' => 'Tools',
            'icon'  => 'wrench',
            'items' => ['Git', 'GitHub', 'Postman', 'Composer', 'VS Code'],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Highlights / What I do (Experience bullets)
    |--------------------------------------------------------------------------
    */
    'highlights' => [
        'Developed 40+ production-ready REST APIs for web and mobile applications.',
        'Built 20+ automated PDF generation modules for personalized reports and business documents.',
        'Designed secure authentication, authorization, and role-based access control.',
        'Integrated OpenAI API, payment gateways, and third-party services.',
        'Optimized MySQL databases for better performance and scalability.',
        'Developed multilingual applications and subscription management systems.',
        'Maintained production applications, fixed critical issues, and shipped new features.',
    ],

    /*
    |--------------------------------------------------------------------------
    | Major projects
    |--------------------------------------------------------------------------
    */
    'projects' => [
        [
            'title' => 'Enterprise REST API Platform',
            'desc'  => 'Architected and delivered 40+ secure, versioned REST APIs powering web and mobile clients, with token-based auth and role-based access control.',
            'tags'  => ['Laravel', 'REST API', 'MySQL', 'Auth'],
            'icon'  => 'api',
        ],
        [
            'title' => 'AI-Powered Report Generation System',
            'desc'  => 'Integrated the OpenAI API to auto-generate personalized, human-like reports at scale with smart prompt handling and caching.',
            'tags'  => ['OpenAI API', 'Laravel', 'Automation'],
            'icon'  => 'ai',
        ],
        [
            'title' => 'Dynamic PDF Generation Engine',
            'desc'  => 'Built 20+ reusable mPDF modules that render dynamic, data-driven PDF reports and business documents on the fly.',
            'tags'  => ['mPDF', 'PHP', 'Reports'],
            'icon'  => 'pdf',
        ],
        [
            'title' => 'Subscription & Membership Platform',
            'desc'  => 'Developed subscription and membership management with recurring plans and integrated payment gateways (Razorpay, PhonePe, Cashfree).',
            'tags'  => ['Payments', 'Razorpay', 'PhonePe', 'Cashfree'],
            'icon'  => 'card',
        ],
        [
            'title' => 'Legal Case Management System',
            'desc'  => 'Designed a structured case-management backend to track legal cases, documents, and client workflows with role-based access.',
            'tags'  => ['Laravel', 'MySQL', 'RBAC'],
            'icon'  => 'scale',
        ],
        [
            'title' => 'Enterprise Consultation Platform',
            'desc'  => 'Built a multilingual consultation platform connecting users with experts, including scheduling and secure communication flows.',
            'tags'  => ['Multilingual', 'Laravel', 'Scalable'],
            'icon'  => 'chat',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Live work / deployments
    |--------------------------------------------------------------------------
    */
    'live_sites' => [
        ['label' => 'Numerology – Bramhaved',        'url' => 'https://numerology.bramhaved.com'],
        ['label' => 'Jyotisham Numerology',          'url' => 'https://jyotishamnumerology.com'],
        ['label' => 'Asha Kundali (Pricing)',        'url' => 'https://asha-kundali.synilogictech.in/pricing'],
        ['label' => 'Astrologer Web App',            'url' => 'https://astrologer-web-app.synilogictech.in/astrologer/login'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Education
    |--------------------------------------------------------------------------
    */
    'education' => [
        [
            'degree' => 'Diploma in Electronics Engineering',
            'org'    => 'Govt. Polytechnic College, Rajsamand (BTER)',
        ],
        [
            'degree' => 'Senior Secondary',
            'org'    => 'RBSE (Rajasthan Board)',
        ],
        [
            'degree' => 'Secondary',
            'org'    => 'RBSE (Rajasthan Board)',
        ],
    ],
];
