<div class="banner">
    <div class="text-center">
        <nav class="nav-primary d-flex justify-content-center">
            @if (has_nav_menu('primary_navigation'))
                {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav justify-content-center']) !!}
            @endif
        </nav>
    </div>
</div>