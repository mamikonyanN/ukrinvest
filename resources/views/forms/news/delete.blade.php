<x-control-modal id="modal-delete-{{$item->id}}" method="delete" :action="route('news.destroy', $item)" :title="__('Delete :entity #:number', ['entity' => __('news'), 'number' => $item->id])" :reset="false" submit-title="Delete">
  <h1>{{__('Are you sure?')}}</h1>
</x-control-modal>
