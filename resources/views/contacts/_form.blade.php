{{ Form::label('message','產品描述') }}
{{ Form::textarea('message',null,['columns' => 50,'rows'=>3]) }}<br>
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