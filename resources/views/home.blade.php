<x-default-layout>
    <main class="home">
        <x-hero
            imgSrc="resources/images/ethan-headshot.webp"
            imgAlt="An image of Ethan Zitting"
            imageCaption="Hi, I'm Ethan! 👋"
            title="Solving Complex Problems in the Web Ecosystem."
        />

        @php
            $services = [
                [
                   'title' => 'Front End',
                   'iconSrc' => 'icons.computer',
                   'details' => 'Building beautiful, pixel-perfect, intuitive user experiences.',
                ],
                [
                   'title' => 'Back End',
                   'iconSrc' => 'icons.server',
                   'details' => 'Building scalable, secure, efficient applications with Laravel.',
                ],
                [
                   'title' => 'Infrastructure',
                   'iconSrc' => 'icons.network',
                   'details' => 'Integrating networks of systems and services to keep your stakeholders happy.',
                ],
                [
                   'title' => 'Project Mgmt',
                   'iconSrc' => 'icons.clipboard',
                   'details' => 'Owning complex projects from beginning to end.',
                ],
            ];
        @endphp
        <x-card-set-vertical
            title="Core Competencies"
            :cardData="$services"
        />

        @php
            $recentWork = [
                [
                    'title' => 'Yay Lunch',
                    'image' => [
                        'src' => 'resources/images/yaylunch.webp',
                        'alt' => 'A screenshot of the home page of yaylunch.com',
                        'link' => 'https://yaylunch.com',
                    ],
                    'description' => 'Guiding a team of devs,
                        performance improvements, new features,
                        and major rewrites.',
                    'toolIconSources' => [
                        'icons.logos.laravel',
                        'icons.logos.vue',
                        'icons.logos.mysql',
                        'icons.logos.docker'
                    ]
                ],
                [
                    'title' => 'Open SGF',
                    'image' => [
                        'src' => 'resources/images/open-sgf.webp',
                        'alt' => 'A screenshot of the home page of opensgf.org',
                        'link' => 'https://opensgf.org',
                    ],
                    'description' => 'Guiding a team of devs, planning and
                    executing new development, setting up infrastructure.',
                    'toolIconSources' => [
                        'icons.logos.next',
                        'icons.logos.react',
                        'icons.logos.docker',
                    ]
                ],
                [
                    'title' => 'Central States Industrial',
                    'image' => [
                        'src' => 'resources/images/csi.webp',
                        'alt' => 'A screenshot of the home page of csidesigns.com',
                        'link' => 'https://csidesigns.com',
                    ],
                    'description' => 'Bug fixes and new feature development.',
                    'toolIconSources' => [
                        'icons.logos.craft',
                        'icons.logos.mysql',
                    ]
                ],
            ]
        @endphp
        <x-card-set-horizontal
            :card-data="$recentWork"
            title="Recent Work"
            section-anchor="work-history"
        />

        <x-call-to-action message="Let's talk about bringing you solutions."/>
    </main>
</x-default-layout>
