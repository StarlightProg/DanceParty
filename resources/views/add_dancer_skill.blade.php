<div class="tag_container_head" id="tag_container_head">
    <h5>{{$skills->getDescription()}}</h5>
    @foreach ($skills->getSkills() as $skill) 
    <div class="form-check mt-2 tag_row d-flex align-items-center">
        <div class="col-sm-11">
            <input class="form-check-input" type="checkbox" value="{{$skill->skill}}" name="{{$skills->getPartName()}}_skills[]" id="flexCheck_{{$skill->skill}}">
            <label class="form-check-label" for="flexCheck_{{$skill->skill}}">
                {{$skill->skill}}
            </label>
        </div>
    </div>
    @endforeach
</div>