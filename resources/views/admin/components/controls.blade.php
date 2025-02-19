@if (isset($route, $role, $module))



        @can($role . '-list')
            <a class="mx-3" href="{{ route($route . '.show', $module) }}" title="show">
                <i class="fas fa-eye text-secondary fa-lg controlles"></i>
            </a>
        @endcan

        @can($role . '-edit')
            <a href="{{ route($route . '.edit', $module) }}" title="edit">
                <i class="fas fa-edit  text-secondary fa-lg controlles"></i>
            </a>
        @endcan

        @can($role . '-verify')
            <a href="" title="{{ $module->verified ? 'verified' : 'verify' }}"
                module_id="{{ $module->id }}">
                <i module_id="{{ $module->id }}"
                    class="fas fa-check-circle fa-lg controlle  {{ $module->verified ? 'text-success' : 'text-secondary' }}" index="{{ $module->id }}"></i>
            </a>
        @endcan

        @can($role . '-delete')
            @csrf
            @method('delete')
            <button type="button" class="btn btn-sm btn-clean btn-icon m-1 " title="{{ __('general.delete') }}"
                data-toggle="modal" data-target="#deleteModalSizeSm-{{ $module->id }}">
                <span class="svg-icon svg-icon-md svg-icon-primary">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                    <i class="fas fa-trash text-secondary  fa-lg controlles "></i>
                </span>
            </button>
            <div class="modal fade" id="deleteModalSizeSm-{{ $module->id }}" tabindex="-1" role="dialog"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">{{ __('general.delete_confirm') }}</h4>
                            <button type="button" class="close m-0" data-dismiss="modal" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body"> {{ __('general.delete_message') }} <b class="">
                                @if ($module->name)
                                    {{ $module->name }}
                                @elseif($module->title)
                                    {!! $module->title !!}
                                @else
                                    {{ $module->email }}
                                @endif
                            </b></div>
                            <div class="modal-footer d-flex justify-content-start align-items-start">
                                <button type="button" class="btn gray btn-outline-secondary"
                                    data-dismiss="modal">{{ __('general.cancel') }}</button>
                                    <form id="delete-form-{{ $module->id }}" style="display: inline-table;"
                                        action="{{ route($route . '.destroy', $module->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit"
                                            class="btn gray btn-outline-danger">{{ __('general.delete') }}</button>
                                    </form>
                            </div>
                    </div>
                </div>
            </div>
        @endcan

        {{-- @can($role . '-reply')
            <a href="{{ route($route . '.reply', $module->id) }}" title="reply">
                <i class="fas fa-reply text-secondary  fa-lg"></i>
            </a>
        @endcan --}}

@endif
@push('scripts')
<script>
$(document).ready(function() {
    // Move all modals with the 'modal fade' class outside of their parent td elements
    $('td').has('.modal.fade').each(function() {
        $(this).find('.modal.fade').appendTo('body');
    });
});
</script>
@endpush
{{-- toodle delete --}}
