<html>
<body>
    <h1>Hello, {{ $name }} 성별은 {{ $sex }} 입니다.</h1>
    @yield('content')
    <a href="{{ route('names') }}">그리팅으로 갑니다.</a>
</body>
</html>