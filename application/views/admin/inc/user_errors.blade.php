@if($errors->has())
    <ul>
    	{{ $errors->first('name', '<li>:message</li>') }}
    	{{ $errors->first('email', '<li>:message</li>') }}
    	{{ $errors->first('username', '<li>:message</li>') }}
    	{{ $errors->first('password', '<li>:message</li>') }}
    	{{ $errors->first('bio', '<li>:message</li>') }}
    </ul>
    <ul>
    	{{ $errors->first('category_id', '<li>:message</li>') }}
    	{{ $errors->first('title', '<li>:message</li>') }}
    	{{ $errors->first('description', '<li>:message</li>') }}
    	{{ $errors->first('body', '<li>:message</li>') }}
    </ul>
    
@endif