@extends('layouts.master')

@section('title')
    Gallery
@endsection

@section('content')
    @include('layouts.header', array('headerTitle' => 'Welcome to the UCSD CKI Gallery!'))
        <div id="Introduction">

            <!--Changes Needed: Turn pictures into hyperlinks. Change pictures.-->

            <p></p>
            <h2>Recap Video: Winter Quarter 2017</h2>
            <p></p>
            <div style="position:relative;height:0;padding-bottom:56.25%"><iframe src="https://www.youtube.com/embed/KBdDg9P9zqg?ecver=2" width="640" height="360" frameborder="0" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen></iframe></div>
                 <p></p>
            <h2>Photo Archive</h2>
                 <p><strong>Revisit</strong> memories from <strong>current</strong> and <strong>previous</strong> years!</p>
        </div>

       <div class="btn-group">
            <button><a href="https://www.flickr.com/photos/ucsdckigallery/albums" style="color:white">Spring 2017 (Flickr Album)</a></button>
            <button><a href="https://drive.google.com/drive/folders/0B-mRsUmzugcLTWRTNFYwa2cwN00" style="color:white">Google Drive 2017</a></button>
           <button><a href="https://drive.google.com/drive/folders/0B-mRsUmzugcLTWRTNFYwa2cwN00" style="color:white">Caption Contest (Old Entries)</a></button>
        </div>

<p></p>

    <head>

        <style>

            .container {
                position: relative;
                float: left;
                width: 33.3%;
                margin-bottom: 16px;
                padding: 0 8px;
            }

            .image {
                display: block;
                width: 100%;
                height: auto;
            }

            .overlay {
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                height: 100%;
                width: 100%;
                opacity: 0;
                transition: .5s ease;
                background-color: #00071d;
            }

            .container:hover .overlay {
                opacity: .85;
            }

            .text {
                color: white;
                font-size: 35px;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
            }
        </style>
    </head>
    <body>

    <h2>Albums by Event Type</h2>
    <p>Hover and click on text to access the album!</p>
    <div class="container">
        <img src="{{ asset('images/board/carl.jpg') }}" alt="Avatar" class="image">
        <div class="overlay">
            <a href="https://drive.google.com/drive/folders/0B-mRsUmzugcLTWRTNFYwa2cwN00">
            <div class="text">Reality Changers</div>
            </a>
        </div>
    </div>

    <div class="container">
        <img src="{{ asset('images/board/carl.jpg') }}" alt="Avatar" class="image">
        <div class="overlay">
            <a href="https://drive.google.com/drive/folders/0B-mRsUmzugcLTWRTNFYwa2cwN00">
            <div class="text">Sports for Exceptional Athletes</div>
            </a>
        </div>
    </div>

    <div class="container">
        <img src="{{ asset('images/board/carl.jpg') }}" alt="Avatar" class="image">
        <div class="overlay">
            <a href="https://drive.google.com/drive/folders/0B-mRsUmzugcLTWRTNFYwa2cwN00">
            <div class="text">Boys & Girls Club</div>
            </a>
        </div>
    </div>

    <div class="container">
        <img src="{{ asset('images/board/carl.jpg') }}" alt="Avatar" class="image">
        <div class="overlay">
            <a href="https://drive.google.com/drive/folders/0B-mRsUmzugcLTWRTNFYwa2cwN00">
            <div class="text">District</div>
            </a>
        </div>
    </div>

    <div class="container">
        <img src="{{ asset('images/board/carl.jpg') }}" alt="Avatar" class="image">
        <div class="overlay">
            <a href="https://drive.google.com/drive/folders/0B-mRsUmzugcLTWRTNFYwa2cwN00">
            <div class="text">Masquerade Ball</div>
            </a>
        </div>
    </div>

    <div class="container">
        <img src="{{ asset('images/board/carl.jpg') }}" alt="Avatar" class="image">
        <div class="overlay">
            <a href="https://drive.google.com/drive/folders/0B-mRsUmzugcLTWRTNFYwa2cwN00">
            <div class="text">Socials</div>
            </a>
        </div>
    </div>

    </body>

@endsection
