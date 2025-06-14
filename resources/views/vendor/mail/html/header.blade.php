@props(['url'])
<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
                <img src="https://laravel.com/img/notification-logo.jpeg" class="logo" alt="Laravel Logo">
            @else
                <img src="{{ asset('frontend/logo.jpeg') }}" class="logo" alt="Infra Logo">
            @endif
        </a>
    </td>
</tr>
