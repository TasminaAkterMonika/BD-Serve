@extends('layouts.app')

@section('content')
<div class="page-header"><h2> {{ $pageTitle }} <small> {{ $pageNote }} </small></h2></div>

<div class="toolbar-nav">
	<div class="row">
		<div class="col-md-6 ">
			@if($access['is_add'] ==1)
	   		<a href="{{ url('aboutus/'.$id.'/edit?return='.$return) }}" class="tips btn btn-default btn-sm  " title="{{ __('core.btn_edit') }}"><i class="fa  fa-pencil"></i></a>
			@endif
			<a href="{{ url('aboutus?return='.$return) }}" class="tips btn btn-default  btn-sm  " title="{{ __('core.btn_back') }}"><i class="fa  fa-times"></i></a>		
		</div>
		<div class="col-md-6 text-right">			
	   		<a href="{{ ($prevnext['prev'] != '' ? url('aboutus/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-default  btn-sm"><i class="fa fa-arrow-left"></i>  </a>	
			<a href="{{ ($prevnext['next'] != '' ? url('aboutus/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-default btn-sm "> <i class="fa fa-arrow-right"></i>  </a>					
		</div>	

		
		
	</div>
</div>
<div class="p-5">		

	<div class="table-responsive">
		<table class="table table-striped table-bordered " >
			<tbody>	
		
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Id', (isset($fields['id']['language'])? $fields['id']['language'] : array())) }}</td>
						<td>{{ $row->id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Banner', (isset($fields['banner']['language'])? $fields['banner']['language'] : array())) }}</td>
						<td>{{ $row->banner}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Image', (isset($fields['image']['language'])? $fields['image']['language'] : array())) }}</td>
						<td>{{ $row->image}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('About Us', (isset($fields['about_us']['language'])? $fields['about_us']['language'] : array())) }}</td>
						<td>{{ $row->about_us}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Certified', (isset($fields['certified']['language'])? $fields['certified']['language'] : array())) }}</td>
						<td>{{ $row->certified}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Certified Icon', (isset($fields['certified_icon']['language'])? $fields['certified_icon']['language'] : array())) }}</td>
						<td>{{ $row->certified_icon}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('M Icon', (isset($fields['m_icon']['language'])? $fields['m_icon']['language'] : array())) }}</td>
						<td>{{ $row->m_icon}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Mission', (isset($fields['mission']['language'])? $fields['mission']['language'] : array())) }}</td>
						<td>{{ $row->mission}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('V Icon', (isset($fields['v_icon']['language'])? $fields['v_icon']['language'] : array())) }}</td>
						<td>{{ $row->v_icon}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Vision', (isset($fields['vision']['language'])? $fields['vision']['language'] : array())) }}</td>
						<td>{{ $row->vision}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('E Icon', (isset($fields['e_icon']['language'])? $fields['e_icon']['language'] : array())) }}</td>
						<td>{{ $row->e_icon}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Experience', (isset($fields['experience']['language'])? $fields['experience']['language'] : array())) }}</td>
						<td>{{ $row->experience}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Link', (isset($fields['link']['language'])? $fields['link']['language'] : array())) }}</td>
						<td>{{ $row->link}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Description', (isset($fields['description']['language'])? $fields['description']['language'] : array())) }}</td>
						<td>{{ $row->description}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Status', (isset($fields['status']['language'])? $fields['status']['language'] : array())) }}</td>
						<td>{{ $row->status}} </td>
						
					</tr>
				
			</tbody>	
		</table>   

	 	

	</div>

</div>
@stop
