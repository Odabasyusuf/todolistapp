<div>
    <div class="row mb-4">
        <div class="col-xl-3">
            <div class="form-group">
                <select wire:model.lazy="statusSelectBox" class="form-control default-select">
                    <option value="">Tümü</option>
                    <option value="0">Yapılacak İşler</option>
                    <option value="1">Tamamlananlar</option>
                </select>
            </div>
        </div>
        <div class="col-xl-6 text-left">
            <div wire:loading class="spinner-border" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <div class="col-xl-3 text-right">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addNewList"> + Yeni Liste Oluştur</button>
        </div>
    </div>
    <div class="row">

        @foreach($listHeadings as $listHeading)
        <div class="col-xl-4 col-xxl-6 col-lg-6">
            <div class="card border-0 pb-0">
                <div class="card-header border-0 pb-0">
                    <h5 class="card-title">{{ $listHeading->name }}</h5>
                    <div>
                        @if($listHeading->status === 1)
                        <span class="badge badge-xs light badge-success">Tamamlandı</span>
                        @else
                        <span class="badge badge-xs light badge-warning">Yapılacak</span>
                        @endif

                        <div class="dropdown custom-dropdown">
                            <div class="btn sharp btn-primary tp-btn" data-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
                            </div>
                            <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-120px, 40px, 0px);">
                                <a class="dropdown-item" wire:click="changeStatusList({{ $listHeading->id }}, 0)">Yapılacaklar</a>
                                <a class="dropdown-item" wire:click="changeStatusList({{ $listHeading->id }}, 1)">Tamamlandı</a>
                                <a class="dropdown-item" wire:click="getList({{$listHeading->id}})" data-toggle="modal" data-target="#updateList" >Düzenle</a>
                                <a class="dropdown-item" wire:click="listDelete({{ $listHeading->id }})">Sil</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="addNewContent({{ $listHeading->id }})">
                        <div class="input-group mb-3">
                            <input type="text" wire:model.lazy="newContentName"  class="form-control" placeholder="Görev Ekle">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Ekle</button>
                            </div>
                        </div>
                    </form>
                    <div class="widget-media dz-scroll height250 ps ps--active-y">
                        <ul class="timeline">
                            @foreach($listHeading->getListContents as $getContents)
                            <li>
                                <div class="timeline-panel">
                                    <div class="custom-control custom-checkbox checkbox-warning check-lg mr-3">
                                        <input type="checkbox" wire:click="changeStatusContent({{ $getContents->id }})" class="custom-control-input" id="contenst{{$getContents->id}}" @if($getContents->status == 1) checked @endif >
                                        <label class="custom-control-label" for="contenst{{$getContents->id}}"></label>
                                    </div>
                                    <div class="media-body">
                                        @if($getContents->status == 0) <h5 class="mb-0"> {{ $getContents->name }} </h5> @endif
                                        @if($getContents->status == 1) <h5 class="mb-0" style="text-decoration: line-through;"> {{ $getContents->name }} </h5> @endif
                                    </div>
                                    <i wire:click="contentDelete({{ $getContents->id }})" class="las la-trash-alt text-danger" style="margin-right: 20px"></i>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 370px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 322px;"></div></div></div>
                </div>
            </div>
        </div>
        @endforeach

    </div>

    <div class="d-flex justify-content-center mt-5 text-center">
        {!! $listHeadings->links() !!}
    </div>

    <div wire:ignore.self class="modal fade" id="addNewList">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Liste Ekle</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="addNewList">
                        @if (session()->has('error'))
                            <div class="alert alert-warning alert-dismissible fade show">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                                {{ session('error') }}
                                <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                </button>
                            </div>
                        @endif
                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                                Başarılı! {{ session('success') }}
                                <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                </button>
                            </div>
                        @endif


                        <div class="form-group">
                            <label class="text-black font-w500">Liste Adı</label>
                            <input type="text" wire:model.lazy="new_list_name" class="form-control" required>
                            <input type="text" wire:model.lazy="category_id" class="form-control" style="display: none" value="{{ $category_id}}">
                        </div>
                        <div class="form-group text-right">
                            <div wire:loading class="spinner-border" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <button type="submit" class="btn btn-success">Oluştur</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="updateList">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Liste Düzenle</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="updateList">
                        @if (session()->has('error'))
                            <div class="alert alert-warning alert-dismissible fade show">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                                {{ session('error') }}
                                <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                </button>
                            </div>
                        @endif
                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                                Başarılı! {{ session('success') }}
                                <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                </button>
                            </div>
                        @endif


                        <div class="form-group">
                            <label class="text-black font-w500">Liste Adı</label>
                            <input type="text" wire:model.lazy="update_list_name" class="form-control" value="{{ $selectedList }}" required>
                            <input type="text" wire:model.lazy="update_list_name" class="form-control" value="{{ $selectedList_id }}" style="display:none;">
                        </div>
                        <div class="form-group text-right">
                            <div wire:loading class="spinner-border" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <button type="submit" class="btn btn-success">Düzenle</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
