
<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
   <div class="menu_section">
  <div class="divider"></div>
       <ul class="nav side-menu">
           <li><a href="{{ route('admin.home') }}"><i class="fa fa-home"></i> Главная </a></li>
           <li><a href="{{ route('admin.photoParent.index') }}"><i class="fa fa-image"></i> Фотогалерея </a></li>
           <li><a href="{{ route('admin.photoChild.index') }}"><i class="fa fa-download"></i>Загрузить фото</a></li>
           <li><a href="{{ route('admin.channel.index') }}"><i class="fa fa-television"></i>Каналы</a></li>
           <li><a href="{{ route('admin.post.index') }}"><i class="fa fa-file-text"></i>Новости</a></li>
           <li><a href="{{ route('admin.category.index') }}"><i class="fa fa-list-ul"></i>Категории новостей</a></li>
           <li><a href="{{ route('admin.media.index') }}"><i class="fa fa-file"></i>Медия новости</a></li>
           <li><a href="{{ route('admin.mediaCategory.index') }}"><i class="fa fa-bars"></i>Категории медия</a></li>
           <li><a href="{{ route('admin.banner.index') }}"><i class="fa fa-caret-square-o-right"></i>Баннер</a></li>
           <li><a href="{{ route('admin.page.index') }}"><i class="fa fa-columns"></i>Страницы</a></li>
           <li><a href="{{ route('admin.menu.index') }}"><i class="fa fa-chevron-circle-down"></i>Меню</a></li>
           <li><a href="{{ route('admin.user.index') }}"><i class="fa fa-user"></i>Пользователи</a></li>
           <li><a href="{{ route('admin.background.index') }}"><i class="fa fa-backward"></i>Фон</a></li>

  
    </ul>
</div>   
</div>

<script src="{{ asset('js/admin/bootstrap.min.js') }}"></script>

{!! Form::open(['route' => 'front.logout', 'id' => 'logout-form']) !!}
{!! Form::close() !!}
