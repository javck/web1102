@extends('layout.master')

@section('content')
<div class="container">
    
        {{ Form::open(['url' => 'contact','class'=>"form-contact contact_form",'files' => true ]) }}
        <div class="row">
            <div class="col-sm-3">
                {{ Form::label('name','使用者名稱') }}
            </div>
            <div class="col-sm-9">
                {{ Form::text('name',null,['class'=>"form-control valid" , 'onfocus'=>"this.placeholder = ''" ,'onblur'=>"this.placeholder = 'Enter your name'" ,'placeholder'=>"Enter your name" ]) }}
            </div>
        </div>
        
        {{ Form::label('desc','產品描述') }}
        {{ Form::textarea('desc',null,['columns' => 50,'rows'=>3]) }}<br>
        {{ Form::hidden('source','google') }}

        {{ Form::label('equips','裝備') }}
        {{ Form::checkbox('equips[]','car') }}車子
        {{ Form::checkbox('equips[]','house') }}房子
        {{ Form::checkbox('equips[]','tv') }}電視
        {{ Form::checkbox('equips[]','computer') }}電腦<br>
        {{ Form::label('gender','性別') }}
        {{ Form::radio('gender','male') }}男
        {{ Form::radio('gender','female') }}女<br>
        {{ Form::label('cost','費用') }}
        {{ Form::number('cost',0,['min' => 0 , 'max' => 10]) }}
        {{ Form::label('mode','模式') }}
        {{ Form::select('mode',$modes,null,['placeholder' => '請選擇模式']) }}
        {{ Form::selectMonth('month') }}
        {{ Form::selectRange('days',1,31) }}
        {{ Form::label('attachment','附件') }}
        {{ Form::file('attachment') }}
        {{ Form::label('sell_day','上架日期') }}
        {{ Form::date('sell_day',Carbon\Carbon::now()) }}
        {{ Form::submit('送出') }} {{ Form::reset('重設') }}
        {{ Form::close() }}

        <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                    </div>
                </div>
            </div>
            <div class="form-group mt-3">
                <button type="submit" class="button button-contactForm boxed-btn">Send</button>
            </div>
        </form>
</div>

@stop