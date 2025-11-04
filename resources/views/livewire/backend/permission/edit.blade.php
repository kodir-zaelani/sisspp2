<div>
    <div class="box box-outline-warning">
        <div class="box-header">
            <h4 class="box-title"><strong>Edit</strong></h4>
        </div>
        <form enctype="multipart/form-data" >
            <div class="box-body">
                <div class="form-group">
                    <h5>Name <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <input type="text" wire:model="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name" required autofocus>
                    </div>
                    @error('name')
                    <div class="form-control-feedback"><small> <code>{{ $message }}</code> </small></div>
                    @enderror
                </div>
                <div class="form-group @error('guard_name') has-error @enderror">
                    <h5>Guard Name <span class="text-danger">*</span></h5>
                    <select class="form-control select2" style="width: 100%;" wire:model="guard_name" name="guard_name">
                        <option value="" holder>Select Guard</option>
                        <option value="web" {{ old('guard_name') == 'web' ? 'selected' : '' }}>Web</option>
                        <option value="api" {{ old('guard_name') == 'web' ? 'selected' : '' }}>Api</option>
                    </select>
                    @error('guard_name')
                    <span class="help-block"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="form-group">
                    <h5>Description </h5>
                    <div class="controls">
                        <input type="text" wire:model="description" class="form-control @error('description') is-invalid @enderror" placeholder="Description" >
                    </div>
                    @error('description')
                    <div class="form-control-feedback"><small> <code>{{ $message }}</code> </small></div>
                    @enderror
                </div>
            </div>
            <div class="box-footer flexbox">
                <div class="flex-grow text-end">
                    <button class="btn btn-sm btn-primary" wire:click.prevent="update"><i class="fa fa-save" aria-hidden="true"></i> Update</button>
                    <button class="btn btn-sm btn-warning ms-10" wire:click='cancelEdit'><i class="ti-back-left pe-2"></i> Cancel</button>
                </div>
            </div>
        </form>
    </div>
</div>
