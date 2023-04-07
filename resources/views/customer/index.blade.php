
<h1>Customers</h1>

@forelse ($customers as $customer)
    <p><strong>
        <a href="/customers/{{$customer->id}}">{{ $customer->name }}</a>
    </strong> ({{ $customer->email }})</p>
@empty
    <p>No customers to show</p>
@endforelse
 

<a href="/customers/create">Create a Customer</a>