@extends('layouts.panel.master')

@section('title', "Todo List App")

@section('content')

    <div class="row">
        <div class="col-lg-4 col-sm-6">
            <div class="widget-stat card bg-primary">
                <div class="card-body  p-4">
                    <div class="media">
									<span class="mr-3">
										<i class="fa-solid fa-align-justify"></i>
									</span>
                        <div class="media-body text-white text-right">
                            <p class="mb-1">Kategori Sayısı</p>
                            <h3 class="text-white">{{ $categoryCount }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div class="widget-stat card bg-primary">
                <div class="card-body  p-4">
                    <div class="media">
                                <span class="mr-3">
                                    <i class="fa-solid fa-list-check"></i>
                                </span>
                        <div class="media-body text-white text-right">
                            <p class="mb-1">Yapılacak Listesi</p>
                            <h3 class="text-white">{{ $listHeadingTaskCount }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="widget-stat card bg-primary">
                <div class="card-body  p-4">
                    <div class="media">
                                <span class="mr-3">
                                   <i class="fa-solid fa-check-double"></i>
                                </span>
                        <div class="media-body text-white text-right">
                            <p class="mb-1">Tamamlananlar</p>
                            <h3 class="text-white">{{ $listHeadingDoneCount }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-titles mb-0 mt-2 text-center">
        <h3> Kategoriler </label>
    </div>

    <div class="row mt-0">
        @foreach($categories as $category)
            <div class="col-lg-4 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('todolist.category-page', $category->slug) }}">
                            <div class="media align-items-center">
                                                <span class="mr-4">
                                                    <i class="fa-solid fa-align-justify" style="font-size: 40px; color: #FE634E"></i>
                                                </span>
                                <div class="media-body text-center">
                                    <h3  class="mb-2">{{ $category->name }} </h3>
                                </div>
                                <div>
                                    <i class="fa-solid fa-arrow-right" style="font-size: 30px"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
