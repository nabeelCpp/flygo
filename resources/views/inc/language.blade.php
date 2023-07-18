<ul class="list-inline mb-0">
    <li class="list-inline-item dropdown lan-switch">
        <?php $li = ''; ?>
        @foreach($available_locales as $locale_name => $available_locale)
            @if($available_locale === $current_locale)
                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('images') }}/flag-{{ $available_locale }}.png" alt=""> <span>{{ $locale_name }}</span>
                </a>
            @else
                <?php $li .= '<li><a class="dropdown-item" href="'.url("language/{$available_locale}").'"><img src="'.asset('images').'/flag-'.$available_locale.'.png" alt=""> <span> '.$locale_name.'</span></a></li>' ?>
            @endif
        @endforeach
            
            <ul class="dropdown-menu p-0">
              {!! $li !!}
            </ul>
    </li>
    <li class="list-inline-item sc-top">
        <a href="#"><img src="images/fb.png" alt=""></a>
        <a href="#"><img src="images/twitter.png" alt=""></a>
        <a href="#"><img src="images/insta.png" alt=""></a>
    </li>
</ul>