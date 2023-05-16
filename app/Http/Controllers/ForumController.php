<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ForumController extends Controller
{
    public function get_cities()
    {
        $cities = json_decode(DB::table('addresses')->select('city_type', 'city', DB::raw('COUNT(city) as count'))->groupBy('city_type','city')->get(), true);
        $users = json_decode(DB::table('users')->leftJoin('addresses', 'address_id', '=', 'addresses.id')->select("city",DB::raw('COUNT(city) as count'))->groupBy('city')->get(), true);
        $data = array();
        foreach($cities as $city) {
            $city['userCount'] = 0;
            foreach($users as $user) {
                if ($user['city'] == $city['city']) {
                    $city['userCount'] = $user['count'];
                }
            }
            $data[] = $city;
        }
        return view('forum',(['title' => 'Форум']), compact('data'));
    }

    public function get_homes(string $city)
    {
        $homes = json_decode(DB::table('addresses')->select()->where('city', '=', $city)->get(),true);
        $data = array();
/*         foreach ($homes as $home) {
            if (isset($home['block'])) {
                $data[] = $home['street_type'] . '. ' . $home['street'] . ', ' . $home['house_type'] . '. ' . $home['house'] . ', ' . $home['block_type'] . '. ' . $home['block'];
            } else {
                $data[] = $home['street_type'] . '. ' . $home['street'] . ', ' . $home['house_type'] . '. ' . $home['house'];
            }
        } */
        foreach ($homes as $key=>$val) {
            if (isset($val['block'])) {
                $data[$key]['full_address'] = $val['street_type'] . '. ' . $val['street'] . ', ' . $val['house_type'] . '. ' . $val['house'] . ', ' . $val['block_type'] . '. ' . $val['block'];
            } else {
                $data[$key]['full_address'] = $val['street_type'] . '. ' . $val['street'] . ', ' . $val['house_type'] . '. ' . $val['house'];
            }
            $data[$key]['id'] = $val['id'];
        }
        return view('forum_city',(['title' => $city]), compact('data', 'city'));
    }

    public function get_themes(string $city, string $id, string $home)
    {
        $themes = array(
            array('name' => 'Объявления и новости', 'icon' => 'newspaper', 'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed magna ut tellus placerat luctus. Vivamus
            at ex tortor.'),
            array('name' => 'События и мероприятия', 'icon' => 'calendar-alt', 'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed magna ut tellus placerat luctus. Vivamus
            at ex tortor.'),
            array('name' => 'Соседи и соседство', 'icon' => 'users', 'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed magna ut tellus placerat luctus. Vivamus
            at ex tortor.'),
            array('name' => 'Обслуживание дома', 'icon' => 'tools', 'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed magna ut tellus placerat luctus. Vivamus
            at ex tortor.'),
            array('name' => 'Управление домом', 'icon' => 'clipboard', 'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed magna ut tellus placerat luctus. Vivamus
            at ex tortor.'),
            array('name' => 'Безопасность и экология', 'icon' => 'recycle', 'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed magna ut tellus placerat luctus. Vivamus
            at ex tortor.'),
            array('name' => 'Интересы и хобби', 'icon' => 'theater-masks', 'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed magna ut tellus placerat luctus. Vivamus
            at ex tortor.'),
            array('name' => 'Общение', 'icon' => 'comments', 'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed magna ut tellus placerat luctus. Vivamus
            at ex tortor.'),
        );
        return view('forum_home',(['title' => $home]), compact('home', 'themes'));
    }
}
