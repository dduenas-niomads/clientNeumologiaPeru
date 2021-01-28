<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Schedule;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        if (!is_null($user)) {
            $params = $request->all();
            $schedules = Schedule::whereNull('deleted_at')->get();
            return response([
                "status" => !empty($schedules) ? true : false,
                "message" => !empty($schedules) ? "list of schedules" : "schedules not found",
                "body" => $schedules,
                "redirect" => false
            ], 200);
        } else {
            return response([
                "status" => false,
                "message" => "forbidden",
                "body" => null,
                "redirect" => true
            ], 403);
        }
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        if (!is_null($user)) {
            $params = $request->all();
            $schedule = new Schedule();
            $schedule = $schedule->create($params);
            return response([
                "status" => !empty($schedule) ? true : false,
                "message" => !empty($schedule) ? "Horario creado" : "No se pudo crear el horario",
                "body" => $schedule,
                "redirect" => false
            ], 201);
        } else {
            return response([
                "status" => false,
                "message" => "forbidden",
                "body" => null,
                "redirect" => true
            ], 403);
        }
    }

    public function update($id, Request $request)
    {
        $user = Auth::user();
        if (!is_null($user)) {
            $schedule = Schedule::find($id);
            if (!is_null($schedule)) {
                $params = $request->all();
                $schedule->fill($params);
                $schedule->save();
                return response([
                    "status" => !empty($schedule) ? true : false,
                    "message" => !empty($schedule) ? "Horario actualizada correctamente" : "Horario no encontrado",
                    "body" => $schedule,
                    "redirect" => false
                ], 200);
            } else {
                return response([
                    "status" => !empty($schedule) ? true : false,
                    "message" => !empty($schedule) ? "Horario actualizada correctamente" : "Horario no encontrado",
                    "body" => $schedule,
                    "redirect" => false
                ], 404);
            }
        } else {
            return response([
                "status" => false,
                "message" => "forbidden",
                "body" => null,
                "redirect" => true
            ], 403);
        }
    }

    public function destroy($id, Request $request)
    {
        $user = Auth::user();
        if (!is_null($user)) {
            $schedule = Schedule::find($id);
            if (!is_null($schedule)) {
                $params = $request->all();
                $schedule->deleted_at = date("Y-m-d H:i:s");
                $schedule->save();
                return response([
                    "status" => !empty($schedule) ? true : false,
                    "message" => !empty($schedule) ? "Horario eliminado correctamente" : "Horario no encontrado",
                    "body" => $schedule,
                    "redirect" => false
                ], 200);
            } else {
                return response([
                    "status" => !empty($schedule) ? true : false,
                    "message" => !empty($schedule) ? "Horario eliminado correctamente" : "Horario no encontrado",
                    "body" => $schedule,
                    "redirect" => false
                ], 404);
            }
        } else {
            return response([
                "status" => false,
                "message" => "forbidden",
                "body" => null,
                "redirect" => true
            ], 403);
        }
    }
}
