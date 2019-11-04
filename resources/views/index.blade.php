<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel Greek community</title>
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Dancing+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
</head>
<body>
<div id="app">
    <div class="container mx-auto">
        <div class="flex justify-center  text-center p-5 mt-10">
            <div class="border-b-2 ">
                <h1 class="laravel-title text-blue-800">Laravel</h1>
                <h4 class="laravel-subtitle">The Greek community for laravel framework</h4>
            </div>

        </div>
        <div class="flex justify-center socials text-center m-8">
            <a class="px-4 py-2 m-2" href="http://slack.laravel.gr" target="_blank"><img src="/img/icons/slack.svg"
                                                                                         alt="Slack page"></a>
            <a class="px-4 py-2 m-2" href="https://www.youtube.com/channel/UCXgd0om3ZNufW8GocLUH23Q/videos" target="_blank"><img
                        src="/img/icons/youtube.svg" alt="Youtube page"></a>
            <a class="px-4 py-2 m-2" href="https://www.facebook.com/laravelgr" target="_blank"><img
                        src="/img/icons/facebook.svg" alt="Facebook page">
            </a>
            <a class="px-4 py-2 m-2" href="https://www.twitter.com/laravelgr" target="_blank"><img
                        src="/img/icons/twitter.svg" alt="Twitter page">
            </a>
        </div>
    </div>
    <div class="flex text-center mt-20 p-10 bg-blue-100">
        <div class="flex-1 text-blue-800">
            Δεν έχεις λογαριασμό; Δημιούργησε έναν τώρα!
            <button class="ml-6 bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded" @click="openform()">Εγγραφή</button>
        </div>
    </div>
    <modals-container/>
</div>
<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
