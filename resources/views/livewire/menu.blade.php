<div>
<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li>
                <a href="{{ route('dashboard') }}" class="ai-icon" aria-expanded="false">
                    <i class="fa-solid fa-house"></i>
                    <span class="nav-text">Anasayfa</span>
                </a>
            </li>

            @foreach($categories as $category)
            <li>
                <a href="{{ route('todolist.category-page', $category->slug) }}" class="ai-icon" aria-expanded="false">
                    <i class="fa-solid fa-align-justify"></i>
                    <span class="nav-text">{{ $category->name }}</span>
                </a>
            </li>
            @endforeach

        </ul>
        <a href="javascript:void(0)" wire:click="resetInfo()" class="add-menu-sidebar" data-toggle="modal" data-target="#addOrderModalside" >+ Kategori Ekle</a>

    </div>
</div>
<div wire:ignore.self class="modal fade" id="addOrderModalside">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Kategori Ekle</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="addCategory">
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
                        <label class="text-black font-w500">Kategori Adı</label>
                        <input type="text" wire:model.lazy="name" class="form-control" required>
                    </div>
                    <div class="form-group text-right">
                        <div wire:loading class="spinner-border" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                        <button type="submit" class="btn btn-primary">Oluştur</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
