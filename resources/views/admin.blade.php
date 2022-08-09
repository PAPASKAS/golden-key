<x-main-layout>
    <div class="m-4">
        <div class="d-flex align-items-start">
            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Главная</button>
                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Недвижимость</button>
            </div>
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                    Это административная панель
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                    {{-- Added real estate --}}
                    <div>
                        <button class="btn btn-outline-warning mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#addedRealEstate" aria-expanded="false" aria-controls="addedRealEstate">
                            Добавить недвижимость
                        </button>
                        <div class="collapse" id="addedRealEstate">
                            <div class="card card-body">
                                <form action="{{ route('real-estate.store') }}" method="POST" enctype="multipart/form-data" class="common-form">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">Наименование</th>
                                            <th scope="col">Описание</th>
                                            <th scope="col">Площадь</th>
                                            <th scope="col">Колличество комнат</th>
                                            <th scope="col">Габариты</th>
                                            <th scope="col">Стоимость</th>
                                            <th scope="col">Картинка</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><input type="text" class="form-control form-control-primary form-control-sm" name="name" placeholder="Сэмюэль" required /></td>
                                            <td><textarea type="text" class="form-control form-control-primary form-control-sm" name="description" placeholder="Описание" required></textarea></td>
                                            <td><input type="number" class="form-control form-control-primary form-control-sm" name="square" placeholder="40" required /></td>
                                            <td><input type="number" class="form-control form-control-primary form-control-sm" name="rooms" placeholder="2" required /></td>
                                            <td><input type="text" class="form-control form-control-primary form-control-sm" name="dimensions" placeholder="9x2" required /></td>
                                            <td><input type="number" class="form-control form-control-primary form-control-sm" name="cost" placeholder="14000" required /></td>
                                            <td><input type="file" class="form-control form-control-primary form-control-sm" name="image_uri" required /></td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <button type="submit" class="btn btn-warning">Добавить</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    {{-- List real estate --}}
                    <hr>
                    <h2 class="mt-3">Уже существуюшие:</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Наименование</th>
                                <th scope="col">Описание</th>
                                <th scope="col">Площадь</th>
                                <th scope="col">Колличество комнат</th>
                                <th scope="col">Габариты</th>
                                <th scope="col">Стоимость</th>
                                <th scope="col">Картинка</th>
                                <th scope="col">Обновить</th>
                                <th scope="col">Удалить</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($real_estates as $real_estate)
                                <tr>
                                    <form action="{{ route('real-estate.update', $real_estate->id) }}" method="POST" enctype="multipart/form-data" class="common-form">
                                        @csrf
                                        @method('PUT')
                                        <td><input type="text" class="form-control form-control-primary form-control-sm" name="name" placeholder="Сэмюэль" required value="{{ $real_estate->name }}" /></td>
                                        <td><textarea type="text" class="form-control form-control-primary form-control-sm" name="description" placeholder="Описание" required>{{ $real_estate->description }}</textarea></td>
                                        <td><input type="number" class="form-control form-control-primary form-control-sm" name="square" placeholder="40" required value="{{ $real_estate->square }}" /></td>
                                        <td><input type="number" class="form-control form-control-primary form-control-sm" name="rooms" placeholder="2" required value="{{ $real_estate->rooms }}" /></td>
                                        <td><input type="text" class="form-control form-control-primary form-control-sm" name="dimensions" placeholder="9x2" required value="{{ $real_estate->dimensions }}" /></td>
                                        <td><input type="number" class="form-control form-control-primary form-control-sm" name="cost" placeholder="14000" required value="{{ $real_estate->cost }}" /></td>
                                        <td><input type="file" class="form-control form-control-primary form-control-sm" name="image_uri" /></td>
                                        <td><x-button type="submit" :outline="false">Обновить</x-button></td>
                                    </form>
                                    <td>
                                        <form action="{{ route('real-estate.destroy', $real_estate->id) }}" method="POST" enctype="multipart/form-data" class="common-form">
                                            @csrf
                                            @method('DELETE')
                                            <x-button type="submit" :outline="false">Удалить</x-button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-main-layout>
