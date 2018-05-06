<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
        
<title>Zamówienie nr </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body style="margin: 0; background:#e9e9e9;">
    <table width="600" cellspacing="0" cellpadding="0" border="0" align="center" style="padding-left: 30px; margin-top: 50px; box-shadow: 0px 2px 21px 0px rgba(170,170,170,1); background: #fff; font-family: Tahoma, sans-serif; color: #626262; font-size: 18px;">
        <tr>
            <td width="600" height="30"></td>
        </tr>
        <tr>
            <td width="600" style="text-align: center;">
            <b>Dane do zamówienia:<br/> {{$order}}<br/></b>
            </td>
        </tr>
        <tr>
            <td width="600" height="40">
                Numer zamówienia: 
            </td>
        </tr>
        <tr>
            <td width="600" height="40">
                Imię i nazwisko: 
            </td>
        </tr>
        <tr>
            <td width="600" height="40">
                Adres: 
            </td>
        </tr>
        <tr>
            <td width="600" style="text-align: center;">
                
                <b>Zamówione produkty:</b><br/>
@foreach($order->orderItems as $item)
                {{$item->product->name}}<br/>
                @endforeach
            </td>
        </tr>
        <tr>
            <td width="600" height="30"></td>
        </tr>
    </table>
</body>

</html>