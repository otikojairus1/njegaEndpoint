<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class GatewayHandlerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function deposit(Request $request)
    {


        $rules = [
            'country_code' => 'required',
            'mobile_number' => 'required',
            'amount'    => 'required',
            'description' => 'required',
            'type' => 'required',
            'reference' => 'required',
        ];

        //validating the inputs deposits

        $input     = $request->only('country_code', 'mobile_number','amount','description', 'type','reference');
        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            //excemption throw
            return response()->json(['success' => false, 'error' => $validator->messages()]);
        }

        // sending money simulated! usually jenga would send a push to a customer phone


        //return an acknowledgement json
        return response()->json(
            [
                "referenceNumber"=> "692194625798",
                "status"=> "SUCCESS"
            ]
        );
    }


    public function send(Request $request)
    {

        $rules = [
            'source_country_code' => 'required',
            'source_account_number' => 'required',
            'source_name' => 'required',
            'destination_wallet_name' => 'required',
            'destination_wallet_type' => 'required',
            'destination_name' => 'required',
            'destination_mobile_number' => 'required',
            'transfer_amount'    => 'required',
            'transfer_type' => 'required',
            'transfer_description' => 'required',
            'transfer_currency_code' => 'required',
            'transfer_reference' => 'required',
        ];

        //validating the inputs sent

        $input     = $request->only('source_country_code', 'source_account_number','source_name','destination_wallet_name', 'destination_wallet_type','destination_name',
        'destination_mobile_number', 'transfer_amount', 'transfer_type', 'transfer_description','transfer_currency_code', 'transfer_reference');
        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            //excemption throw
            return response()->json(['success' => false, 'error' => $validator->messages()]);
        }

        // sending money simulated! usually jenga would send cash here


        //return an acknowledgement json
        return response()->json(
            [
                "referenceNumber"=> "692194625798",
                "status"=> "SUCCESS"
            ]
        );
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
