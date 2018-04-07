@extends('layouts.app')
@section('content')

    <div class="c-layout-breadcrumbs-1 c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
    	<div class="container">
    		<div class="c-page-title c-pull-left">
    			<h3 class="c-font-uppercase c-font-sbold">Tunniplaan</h3>
    		</div>
    	</div>
    </div>
    <div class="c-content-box c-size-md c-bg-white">
    	<div class="container">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th></th>
                        <th>Esmaspäev</th>
                        <th>Teisipäev</th>
                        <th>Kolmapäev</th>
                        <th>Neljapäev</th>
                        <th>Reede</th>
                        <th>Laupäev</th>
                        <th>Pühapäev</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>10:00</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Team Gym (5-7 aastased)</td>
                        <td class="success">Mudilased (2-3 aastat)</td>
                    </tr>
                     <tr>
                        <th>11:00</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="info">Show rühm</td>
                        <td class="success">Mudilased (3-4 aastat)</td>
                    </tr>
                     <tr>
                        <th>12:00</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="success">Mudilased (4-5 aastat)</td>
                    </tr>
                     <tr>
                        <th>16:00</th>
                        <td class="danger">Team Gym (9-12 aastased)</td>
                        <td class="warning">Harrastusvõimlemine</td>
                        <td class="danger">Team Gym (9-12 aastased)</td>
                        <td class="warning">Harrastusvõimlemine</td>
                        <td class="danger">Team Gym (9-12 aastased)</td>
                        <td></td>
                        <td></td>
                    </tr>
                      <tr>
                        <th>18:00</th>
                        <td class="info">Team Gym (7-8 aastased)</td>
                        <td>Team Gym (5-7 aastased)</td>
                        <td class="info">Team Gym (7-8 aastased)</td>
                        <td>Team Gym (5-7 aastased)</td>
                        <td class="info">Team Gym (7-8 aastased)</td>
                        <td></td>
                        <td></td>
                    </tr>
                     <tr>
                        <th>20:00</th>
                        <td></td>
                        <td class="info">Show rühm</td>
                        <td></td>
                        <td class="info">Show rühm</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
