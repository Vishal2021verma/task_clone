<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Task</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }
    </style>

    <style>
        * {
            box-sizing: border-box;

        }

        body {
            font-family: 'Nunito', sans-serif;
            height: 100vh;
            background-color: #1a202c;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        /* header css */
        .outer-div {
            position: relative;
            width: 350px;
            height: 97%;
            background-color: white;
            border: none;
            border-radius: 10px;
        }

        header {
            width: 100%;

        }

        .title-div {
            width: 100%;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            padding: 10px;

        }

        .title-div svg {
            margin: 0;
        }

        .title-div h2 {
            margin: 0 0 0 5px;

        }

        nav {
            width: 100%;
            display: flex;
            flex-direction: row;
            padding: 0;
            border-bottom: 1px solid lightgray;
            /* overflow-x: scroll; */
        }



        nav button {
            background-color: white;
            padding: 15px 12px;
            font-weight: 600;
            font-size: 14px;
            color: #3c3c3c;

        }

        .active {
            color: #1363DF;
            border-bottom: 3px solid #1363DF;
            border-bottom-right-radius: 3px;
            border-bottom-left-radius: 3px;
        }

        /* header css end here */



        footer {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            padding: 10px;
            border-top: 1px solid lightgray;
            box-shadow: 0px 0px 8px 0px #5d5d5d7a;

        }

        .add-div {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            box-shadow: 0px 0px 8px 0px #5d5d5d7a;
            background-color: #F24C4C;
            transition: 200ms;

        }


        .burger-menu {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            transition: 200ms;

        }

        .burger-menu:active,
        .add-div:active {
            transform: scale(1.2);
        }

        /* .ani-div{
            transition: 100ms;
            border-radius: 50%;
            width: 2px;
            height: 2px;
            /* border:1px solid black; */
        /* }
        .burger-menu:active .ani-div{

            background-color: rgba(63, 63, 63, 0.148);
            transform: scale(18);
        } */


        /* .add-div-sec{
            width: 25px;
            height: 25px;
            border-radius: 50%;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            background-color:  #5FD068;
        } */
        .footer-div {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: baseline;
        }
    </style>
</head>

<body class="antialiased">
    <div class="outer-div">
        <header>
            <div class="title-div">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" fill="#1363DF">
                    <path
                        d="M12 22.85q-2.275 0-4.25-.85t-3.438-2.312Q2.85 18.225 2 16.25q-.85-1.975-.85-4.25T2 7.75q.85-1.975 2.312-3.438Q5.775 2.85 7.75 2q1.975-.85 4.25-.85 1.625 0 3.075.425Q16.525 2 17.8 2.8l-2.325 2.35q-.8-.4-1.663-.625Q12.95 4.3 12 4.3q-3.2 0-5.45 2.237Q4.3 8.775 4.3 12t2.25 5.462Q8.8 19.7 12 19.7t5.45-2.238Q19.7 15.225 19.7 12q0-.3-.025-.588-.025-.287-.075-.562l2.6-2.6q.325.875.488 1.812.162.938.162 1.938 0 2.275-.85 4.25t-2.312 3.438Q18.225 21.15 16.25 22q-1.975.85-4.25.85Zm-1.475-5.75L5.9 12.475l2.075-2.1 2.55 2.55L20.75 2.675l2.1 2.1Z" />
                </svg>
                <h2>Tasks</h2>
            </div>



            <nav>
                <button class="list-name-button"><svg xmlns="http://www.w3.org/2000/svg"
                        enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px"
                        fill="#3c3c3c">
                        <g>
                            <path d="M0,0h24v24H0V0z" fill="none" />
                            <path d="M0,0h24v24H0V0z" fill="none" />
                        </g>
                        <g>
                            <path
                                d="M12,17.27L18.18,21l-1.64-7.03L22,9.24l-7.19-0.61L12,2L9.19,8.63L2,9.24l5.46,4.73L5.82,21L12,17.27z" />
                        </g>
                    </svg></button>
                <button class="active">My Tasks</button>
                <button> + New List</button>



            </nav>
        </header>
        <main>
           
        </main>

        <footer>
            <div class="footer-div">
                <div class="burger-menu">

                    <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" fill="#3c3c3c">
                        <path d="M3 18v-2h18v2Zm0-5v-2h18v2Zm0-5V6h18v2Z" />
                    </svg>

                </div>

                <div class="add-div">
                    <div class="add-div-sec">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 0 24 24" width="48px"
                            fill="#3c3c3c">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm5 11h-4v4h-2v-4H7v-2h4V7h2v4h4v2z" />
                        </svg>
                    </div>
                </div>

                <div class="burger-menu"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"
                        fill="#3c3c3c">
                        <path
                            d="M12 20q-.825 0-1.412-.587Q10 18.825 10 18q0-.825.588-1.413Q11.175 16 12 16t1.413.587Q14 17.175 14 18q0 .825-.587 1.413Q12.825 20 12 20Zm0-6q-.825 0-1.412-.588Q10 12.825 10 12t.588-1.413Q11.175 10 12 10t1.413.587Q14 11.175 14 12q0 .825-.587 1.412Q12.825 14 12 14Zm0-6q-.825 0-1.412-.588Q10 6.825 10 6t.588-1.412Q11.175 4 12 4t1.413.588Q14 5.175 14 6t-.587 1.412Q12.825 8 12 8Z" />
                    </svg></div>
            </div>
        </footer>

    </div>
</body>

</html>
