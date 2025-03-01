<a class="inline-block no-underline hover:text-black hover:underline py-2 px-4 {{ request()->is($attributes['href'])? 'font-semibold':'' }}" href="{{ $attributes['href'] }}">{{ $slot }}</a>
