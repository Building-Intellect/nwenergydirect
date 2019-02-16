@component('mail::message')
# Order Received

Payment is processing, and your order will ship soon.

**Order ID:** {{ $order->id }}

**Customer Email:** {{ $order->billing_email }}

**Customer Name:** {{ $order->billing_name }}

**Order Total:** ${{ round($order->billing_total / 100, 2) }}

**Order Details**

@foreach ($order->products as $product)
Item: {{ $product->name }} <br>
Price: ${{ round($product->price / 100, 2)}} <br>
Quantity: {{ $product->pivot->quantity }} <br>
@endforeach

You can get track your orders by visiting nwenergydirect.com

@component('mail::button', ['url' => config('app.url'), 'color' => 'green'])
Go to NWEnergyDirect
@endcomponent

Thank you for your order!
@endcomponent
