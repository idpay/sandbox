<form class="form-horizontal" action="{{route('store')}}" id="snedPaymentApi" method="post"
      data-content="snedPaymentApiButton" data-value="transferToGetWay">

    @csrf
    <div class="form-group">
        <label class="control-label col-sm-3"
               for="{{__('sandbox.api_key')}}">{{__('sandbox.api_key')}}</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="api_key" placeholder="مثال: a5b6-4926-aa74-427b95c2"  @if(isset($order)) disabled  value="{{$order->API_KEY}}" @endif
            name="api_key" >
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" for="{{__('sandbox.name')}}">{{__('sandbox.name')}}</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="name" placeholder="مثال: محمد" name="name" @if(isset($order)) disabled  value="{{$order->name}}" @endif
            >
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3"
               for="{{__('sandbox.phone_number')}}">{{__('sandbox.phone_number')}}</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="phone_number" placeholder="مثال: 09361446385" @if(isset($order)) disabled  value="{{$order->phone_number}}" @endif
            name="phone_number">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" for="{{__('sandbox.email')}}">{{__('sandbox.email')}}</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="email" @if(isset($order)) disabled   value="{{$order->email}}"@endif
            placeholder="مثال: mohammadnabipour1371@gmail.com"
                   name="email">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" for="{{__('sandbox.amount')}}">{{__('sandbox.amount')}}
        </label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="amount" placeholder="مثال: 1000" @if(isset($order)) disabled value="{{$order->amount}}" @endif
            name="amount">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3" for="{{__('sandbox.reseller')}}">{{__('sandbox.reseller')}}
        </label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="reseller" placeholder="مثال: 111111"  @if(isset($order))  value="{{$order->reseller}}"  disabled @endif
            name="reseller">
        </div>
    </div>


    <div class="form-group">
        <label class="control-label col-sm-3" for="{{__('sandbox.sanbox')}}">{{__('sandbox.sanbox')}}
        </label>
        <div class="col-sm-9">
            <select class="form-control" name="sandbox" id="exampleFormControlSelect2" @if(isset($order)) disabled @endif>
                <option value="1" @if(isset($order) and $order->sandbox == 1)selected @endif>بله</option>
                <option value="0" @if(isset($order) and $order->sandbox == 0)selected @endif>خیر</option>
            </select>
        </div>
    </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
            <button type="submit" id="snedPaymentApiButton" class="btn btn-default" @if(isset($order)) disabled @endif>ایجاد تراکنش</button>
        </div>
    </div>
</form>