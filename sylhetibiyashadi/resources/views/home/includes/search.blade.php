<section class="search-profile py-5">
    <div class="container text-center">
        <form class="d-flex justify-content-center" action="{{route('search')}}" method="GET" role="search">
            @role('admin')
            <div class="form-group mx-sm-3 mb-2">
                <label class="">Id number : </label>
                <input type="number" name="user_id" class="form-control" value="{{(isset($searchData['user_id']) && !empty($searchData['user_id'])) ? $searchData['user_id'] : ''}}">
            </div>
            @endrole

            <div class="form-group mx-sm-3 mb-2">
                <label class="sr-only">Looking For</label>
<!--                --><?php
//                dd($searchData);
//                ?>
                <select class="form-control" name="gender">
                    <option value="">Bride/Groom</option>
                    <option value="female" {{(isset($searchData['gender']) && $searchData['gender'] == 'female') ? 'selected' : ''}}>Bride</option>
                    <option value="male" {{(isset($searchData['gender']) && $searchData['gender'] == 'male') ? 'selected' : ''}}>Groom</option>
                </select>
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <label class="sr-only">Age</label>
                <select class="form-control" name="agefrom">
                    <option value="">Age from</option>
                    @for($i= 18;$i<$maximum;$i++)
                        <option value="{{$i}}">{{$i}}</option>
                    @endfor
                </select>
            </div>
            <div class="to">To</div>
            <div class="form-group mx-sm-3 mb-2">
                <label class="sr-only">Age</label>
                <select class="form-control" name="ageto">
                    <option value="">Age to</option>
                    @for($i= 18;$i<$maximum;$i++)
                        <option value="{{$i}}">{{$i}}</option>
                    @endfor
                </select>
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <label class="sr-only">Email</label>
                <select class="form-control" name="religion">
                    <option value="">Religion</option>
                    <option value="islam">Islam</option>
                    <option value="hinduism">Hinduism</option>
                    <option value="chirstianity">Chirstianity</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary mb-2">Search</button>
        </form>
    </div>
</section>

