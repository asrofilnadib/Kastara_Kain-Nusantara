@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Kastara')
<img src="https://github.com/asrofilnadib/Kastara_Kain-Nusantara/blob/a28aa0c62c16d1bcf6d8054be85c5d51d9b121f5/public/images/about-03.png?raw=true" class="logo h-auto w-auto" alt="Laravel Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
