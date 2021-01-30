<div class="form-group">
    <label class="col-md-12">Category Level</label>
    <div class="col-md-12">
       <select name="parent_id" id="" class="form-control @error('parent_id') is-invalid @enderror">
        <option value="0" @if(isset($categoryData['parent_id']) && $categoryData['parent_id']==0) selected="" @endif>Main Category</option>
       @if(!empty($getCategories))
       @foreach($getCategories as $category)
         <option value="{{$category['id']}}">{{$category['name']}}</option>
       @if(!empty($category['subcategories']))
       @foreach($category['subcategories'] as $subcategory)
       <option value="{{$subcategory['id']}}">&nbsp;&raquo;&nbsp;{{$subcategory['name']}}</option>
       @endforeach
       @endif
       @endforeach
       @endif
    </select>
      </div>
</div>