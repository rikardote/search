<div id="search-bar">
    <form class="d-flex" role="search">
        <input wire:model.live.debounce.500ms="search" class="form-control me-2" type="search" placeholder="Search"
            aria-label="Search">
    </form>
    @if (sizeof($users) > 0)
        <div class="dropdown-menu d-block py-0">
            <div class="px-3 py-1 border-bottom">
                <div
                    class="d-flex flex-column ml-3">
                    <table class="table table-hover table-sm">
                        @foreach ($users as $user)
                            <tr wire:click="link({{ $user->id }})">
                                <td class="rounded">
                                    <span>{{ $user->id }} - {{ $user->num_empleado }} - </span>
                                    <small>{{ $user->name }}</small>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    @endif
</div>
