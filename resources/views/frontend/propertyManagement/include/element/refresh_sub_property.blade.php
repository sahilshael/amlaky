   

    <div class="row">
       @if(isset($sub_property_types) && !empty($sub_property_types))                        
            @foreach($sub_property_types as $subpro_type)                    
                <div class="col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" name="sub_type" class="form-check-input" value="" checked>{{@$subpro_type['property_subtype']}}
                        </label>
                    </div>
                </div>
            @endforeach
       @endif 
    </div>