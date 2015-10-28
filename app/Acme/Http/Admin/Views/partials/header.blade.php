<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <div class="divider"></div>
        <ul class="nav side-menu">
            <li><a href="{{ route('admin.home') }}"><i class="fa fa-home"></i>Башкы </a></li>
            <li><a href="{{ route('admin.photoParent.index') }}"><i class="fa fa-image"></i>Фотогалерея </a></li>
            <li><a href="{{ route('admin.photoChild.index') }}"><i class="fa fa-download"></i>Сүрөт жүктөө</a></li>
            <li><a href="{{ route('admin.channel.index') }}"><i class="fa fa-television"></i>Каналдар</a></li>
            <li><a><i class="fa fa-newspaper-o"></i>Макалалар <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu" style="display: none">
                    <li><a href="{{ route('admin.post.index') }}">Макалалар</a></li>
                    <li><a href="{{ route('admin.category.index') }}">Макалалар категориясы</a></li>                                       
                </ul>
            </li>
            <li><a><i class="fa fa-file-video-o"></i>Медиа макалалар <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu" style="display: none">
                    <li><a href="{{ route('admin.media.index') }}">Медия макалалар</a></li>
                    <li><a href="{{ route('admin.mediaCategory.index') }}">Медия категориялары</a></li>                                
                </ul>
            </li>         
            <li><a href="{{ route('admin.banner.index') }}"><i class="fa fa-caret-square-o-right"></i>Баннер</a></li>
            <li><a href="{{ route('admin.page.index') }}"><i class="fa fa-columns"></i>Барактар</a></li>
            <li><a href="{{ route('admin.menu.index') }}"><i class="fa fa-chevron-circle-down"></i>Меню</a></li>
            <li><a href="{{ route('admin.user.index') }}"><i class="fa fa-user"></i>Колдонуучулар</a></li>
            <li><a href="{{ route('admin.background.index') }}"><i class="fa fa-backward"></i>Фон сүрөтү</a></li>
        </ul>
    </div>   
</div>

     <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">                        
                        <a data-toggle="tooltip" data-placement="top" title="Профиль">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Оңдоолор">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Жардам">
                            <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span>
                        </a>
                        <a href="javascript:document.getElementById('logout-form').submit()" data-toggle="tooltip" data-placement="top" title="Чыгуу">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->


<script src="{{ asset('js/admin/bootstrap.min.js') }}"></script>

{!! Form::open(['route' => 'front.logout', 'id' => 'logout-form']) !!}
{!! Form::close() !!}
