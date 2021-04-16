<?php

namespace App\Http\Controllers;

class ResumeController
{
    public function __invoke()
    {
        $data['experiences'] = [
            [
                'company'         => 'SkylinedDynamics',
                'company_address' => 'remote',
                'position'        => 'API Developer',
                'department'      => 'Development team',
                'year'            => '(September) 2020 - present',
                'work'            => [
                    'Create API for mobile and web applications',
                    'Integrate 3rd party APIs',
                    'As I am a Full Stack developer, I also help in developing our VueJs application'
                ]
            ],
            [
                'company'         => 'Freelance',
                'company_address' => 'remote',
                'position'        => 'Full stack developer',
                'department'      => 'Development team',
                'year'            => '(May) 2020 - present',
                'work'            => [
                    'Contribute to open source project on github',
                    'Design and develop VueJs application which interfaces to Laravel (project based)',
                    'Build personal website (in progress)'
                ]
            ],
            [
                'company'         => 'EasyPayroll',
                'company_address' => 'remote',
                'position'        => 'Full stack developer',
                'department'      => 'Development team',
                'year'            => '2019 - (May) 2020',
                'work'            => [
                    'Design and develop Chrome extension which shows reports from main Laravel application',
                    'Develop VueJs application which interfaces to API',
                    'Create APIs using Laravel',
                    'Manage git repository',
                    'Create microservices which is used for main API application',
                    'Planning and architecture of application'
                ]
            ],
            [
                'company'         => 'SandboxDigital',
                'company_address' => 'remote',
                'position'        => 'Full stack developer and DevOps',
                'department'      => 'Development team',
                'year'            => '2016 - 2019',
                'work'            => [
                    'Design and develop VueJs application which interfaces to API',
                    'Create APIs using Laravel',
                    'Create Laravel application',
                    'Create Custom Wordpress and Plugin',
                    'Create and update Magento Module and fix issues (limited experience)',
                    'Planning and architecture of application',
                    'Create shopify applications (limited experience)',
                    'Manage git repository',
                    'Setup/Manage server with AWS and Cpanel',
                    'Planning and architecture of application'
                ]
            ],
            [
                'company'         => 'Ultro Digital Ltd.',
                'company_address' => 'remote',
                'position'        => 'MeteorJS Developer',
                'department'      => 'Development team',
                'year'            => '2015 - 2016',
                'work'            => [
                    'Create IOS and Android application using MeteorJS',
                    'Manage and fix existing applications',
                    'Create Chrome extension that is interface with MeteorJS app'
                ]
            ],
            [
                'company'         => 'WebArtisan',
                'company_address' => 'Davao City, Philippines',
                'position'        => 'Web Developer',
                'department'      => 'Development team',
                'year'            => '2013 - 2015',
                'work'            => [
                    'Build custom application using Jquery and Laravel',
                    'Create Wordpress theme based on PSD design layout',
                    'Create & customize existing Wordpress plugin',
                    'Develop and manage responsive template',
                    'Manage application deployment using Cpanel and FTP'
                ]
            ],
        ];

        $data['education'] = [
            'institution' => 'University of Mindanao, Philippines',
            'address'     => 'Davao City, Philippines',
            'course'      => 'Bachelor of Science in Information Technology',
            'year'        => '2008 - 2014',
            'other_notes' => 'I spent more than 4 years because I have already worked as a Freelance web developer at this year.'
        ];

        $data['online_accounts'] = [
            [
                'name' => 'Github',
                'link' => 'https://github.com/edionmelarosa',
                'icon' => 'fab fa-github'
            ],
            [
                'name' => 'LinkedIn',
                'link' => 'https://www.linkedin.com/in/espiridion-larosa-2a1316a3',
                'icon' => 'fab fa-linkedin'
            ],
            [
                'name' => 'Twitter',
                'link' => 'https://twitter.com/edionmelarosa',
                'icon' => 'fab fa-twitter'
            ],
            [
                'name' => 'Email',
                'link' => 'mailto:contact@edionme.com',
                'icon' => 'far fa-envelope'
            ],
        ];

        $data['stacks'] = [
            'Frontend'   => 'HTML, Css/Sass, TailWindCss/Bootstrap, JavaScript, TypeScript, jQuery, VueJS, ReactJS, Webpack',
            'Languages'  => 'PHP, Go(limited knowledge), NodeJs',
            'Frameworks' => 'Laravel,Symfony(limited knowledge), TypeGraphQl, NestJS, GraphQl, MikroORM',
            'CMS'        => 'WordPress',
            'Database'   => 'MySQL, MongoDB(limited knowledge), Postgresql',
            'DevOps'     => 'Linux server environment, AWS(limited knowledge), Cpanel, Git, Nginx',
            'Testing'    => 'PHPUnit, PestPHP'
        ];

        $data['talks'] = [
            [
                'event'       => 'VueJs Workshop part 1',
                'location'    => 'Spacelab, Davao City Philippines',
                'date'        => 'March 16, 2019',
                'description' => 'Invited to talk about VueJs fundamentals'
            ],
            [
                'event'       => 'Campus Devcon',
                'location'    => 'SKSU Isulan University, Philippines',
                'date'        => 'March 3, 2018',
                'description' => 'Invited by the school to talk of PHP OOP and Laravel fundamentals'
            ],
            [
                'event'       => 'Campus Devcon',
                'location'    => 'Cor Jesu College, Digos City Philippines',
                'date'        => 'Jun 23, 2017',
                'description' => 'Talk about MeteorJs core concepts'
            ],
        ];

        $data['projects'] = [
            [
                'name'        => 'Inerrabit',
                'description' => 'Jira like clone.'
            ],
            [
                'name'        => 'SEO Web App',
                'link'        => 'http://seobrainess.com/',
                'description' => 'Web Application that calculates and generates graph base on uploaded data.'
            ],
            [
                'name'        => 'Keep',
                'link'        => 'https://github.com/edionmelarosa/keep-api',
                'description' => 'An API for expense and income tracker.'
            ]
        ];

        $data['certificates'] = [
            [
                'name' => 'IBM DB2 Database and Application Fundamentals',
                'year' => 'December, 2012'
            ]
        ];

        $data['general_information'] = [
            'expertise'     => 'Full stack developer / DevOps(limited experience)',
            'name'          => 'Espiridion Larosa Jr',
            'email'         => 'contact@edionme.com',
            'mobile_number' => '+63910-997-8055',
            'website'       => 'https://edionme.com'
        ];

        $data['organizations'] = [
            [
                'name'        => 'DevConPH',
                'link'        => 'https://devcon.ph/',
                'description' => 'Promoting Filipino IT Global Competence'
            ]
        ];

        $data = (object) $data;
        return view('pages.resume', compact('data'));
    }
}
