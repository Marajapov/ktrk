<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('admin.home') }}"><span class="glyphicon glyphicon-home"></span></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="btn btn-default" style="padding:0;"><a href="{{ route('admin.channel.index') }}" target="">Каналы</a></li>
                <li class="btn btn-default" style="padding:0;"><a href="{{ route('admin.post.index') }}" target="">Новости</a></li>
                <li class="btn btn-default" style="padding:0;"><a href="{{ route('admin.category.index') }}" target="">Категории новостей</a></li>
                <li class="btn btn-default" style="padding:0;"><a href="{{ route('admin.media.index') }}" target="">Медия новости</a></li>
                <li class="btn btn-default" style="padding:0;"><a href="{{ route('admin.banner.index') }}" target="">Баннер</a></li>
                <li class="btn btn-default" style="padding:0;"><a href="{{ route('admin.page.index') }}" target="">Стараницы</a></li>
                <li class="btn btn-default" style="padding:0;"><a href="{{ route('admin.menu.index') }}" target="">Меню</a></li>
                <li class="btn btn-default" style="padding:0;"><a href="{{ route('admin.user.index') }}" target="">Пользователи</a></li>
                <li class="btn btn-default" style="padding:0;"><a href="{{ route('admin.background.index') }}" target="">Фон</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown btn btn-default" style="padding:0;">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ auth()->user()->getName() }} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ route('front.home') }}" target="">Homepage</a></li>
                        <li><a href="#">Настройки</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:document.getElementById('logout-form').submit()"><i class="fa fa-power-off"></i> &nbsp; Выход</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>


{!! Form::open(['route' => 'front.logout', 'id' => 'logout-form']) !!}
{!! Form::close() !!}

