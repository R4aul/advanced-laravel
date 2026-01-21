@props(['route', 'name'])

<a href="{{ route($route) }}"
   class="flex items-center px-2 py-1.5 text-body rounded-base hover:bg-neutral-tertiary hover:text-fg-brand group 
          {{ request()->routeIs($route) ? 'bg-neutral-tertiary text-fg-brand' : '' }}">
   {{ $slot }}
   <span class="ms-3">{{ $name }}</span>
</a>