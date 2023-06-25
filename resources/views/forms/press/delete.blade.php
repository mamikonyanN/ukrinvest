<x-control-modal id="modal-delete-{{$item->id}}" method="delete" :action="route('press.destroy', $item)" :title="__('Delete :entity #:number', ['entity' => __('press'), 'number' => $item->id])" :reset="false" submit-title="Delete">
  <h1>Are you sure?</h1>
</x-control-modal>
