<x-default-layout>
    <main class="home">
        <x-hero
            imgSrc="resources/images/ethan-headshot.jpg"
            imgAlt=""
            imageCaption="Hi, I'm Ethan! 👋"
            title="Solving Complex Problems in the Web Ecosystem"
        />

        @php
            $services = [
                [
                   'title' => 'Front End',
                   'iconSrc' => 'icons.computer',
                   'details' => 'Building beautiful, pixel-perfect, intuitive user experiences',
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
            title="Services"
            :cardData="$services"
        />

        @php
            $recentWork = [
                [
                    'title' => 'Yay Lunch',
                    'image' => [
                        'src' => 'resources/images/yaylunch.png',
                        'alt' => 'A screenshot of the home page of yaylunch.com',
                        'link' => 'https://yaylunch.com',
                    ],
                    'basis' => 'Full Time',
                    'responsibilities' => [
                        'Infrastructure',
                        'Bug Fixing',
                        'Performance Improvements',
                        'New Feature Development',
                        'Refactoring away existing messes'
                    ]
                ],
                [
                    'title' => 'Open SGF',
                    'image' => [
                        'src' => 'resources/images/open-sgf.png',
                        'alt' => 'A screenshot of the home page of opensgf.org',
                        'link' => 'https://opensgf.org',
                    ],
                    'basis' => 'Volunteer',
                    'responsibilities' => [
                        'Infrastructure',
                        'New Development',
                        'Leading Other Devs',
                    ]
                ],
                [
                    'title' => 'Central States Industrial',
                    'image' => [
                        'src' => 'resources/images/csi.png',
                        'alt' => 'A screenshot of the home page of csidesigns.com',
                        'link' => 'https://csidesigns.com',
                    ],
                    'basis' => 'Contract',
                    'responsibilities' => [
                        'Bug Fixing',
                        'Refining Existing Features',
                    ]
                ],
            ]
        @endphp
        <x-card-set-horizontal
            :card-data="$recentWork"
            title="Recent Work"
            section-anchor="work-history"
        />

        <x-call-to-action message="Tell me about your next project"/>
    </main>
</x-default-layout>
