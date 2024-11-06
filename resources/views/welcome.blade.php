@extends('shopify-app::layouts.default')


@section('content')
    <div class="section-container">
        <a href="{{URL::tokenRoute('shop') }} }}" style="
            display: inline-block;
            margin-top: 15px;
            margin-bottom: 30px;
            padding: 8px 16px;
            font-size: 14px;
            color: #FFFFFF;
            background-color: #5C6AC4;
            text-decoration: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        " onmouseover="this.style.backgroundColor='#4A56A1'" onmouseout="this.style.backgroundColor='#5C6AC4'">
            Shop Details
        </a>


        <a href="{{URL::tokenRoute('products') }} }}" style="
            display: inline-block;
            margin-top: 15px;
            padding: 8px 16px;
            font-size: 14px;
            color: #FFFFFF;
            background-color: #5C6AC4;
            text-decoration: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        " onmouseover="this.style.backgroundColor='#4A56A1'" onmouseout="this.style.backgroundColor='#5C6AC4'">
            Products
        </a>
    </div>
@endsection

@section('scripts')
    @parent
@endsection