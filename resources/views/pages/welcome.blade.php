@extends('layouts.app')

@section('body')

<style>
    .container {
        position: relative;
    }

    .typing-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        white-space: nowrap;
        overflow: hidden;
        /* border-right: .15em solid orange;  */
        animation: typing 3s steps(30) infinite;
        font-size: 62px; /* ukuran teks */
        color: white; /* warna teks */
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); /* efek bayangan hitam */
    }

    @keyframes typing {
        from {
            width: 0;
        }
        to {
            width: 100%;
        }
    }
</style>

<div class="container">
    <img src="{{ asset('images/frontpage.jpg') }}" alt="frontpage" width="100%" height="100%">
    <div class="typing-text">
        Welcome to students library
    </div>
</div>

@endsection
