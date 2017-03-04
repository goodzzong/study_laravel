@extends('layouts.mater')

@section('content')
    <a href="{{ route('names') }}">그리팅으로 갑니다.</a>
    @include('partials.footer')
@endsection

@section('script')
    <script>
        alert("저는 자식 뷰의  'script' 섹션입니다. ");
    </script>
@endsection

