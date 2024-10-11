<?php 
namespace App\Utility;

class PythagoreUtility{

    //methode qui ramemene

    public static function display(): string
    {
        
       $htmlRequest = '';

      $htmlRequest .= '<table>';
      $htmlRequest .= '<thead><tr><th></th>';

      // En-tête
      for ($j = 0; $j <= 10; $j++) {
          $htmlRequest .= "<th>$j</th>";
      }
      $htmlRequest .= '</tr></thead><tbody>';

      // Corps du tableau
      for ($i = 0; $i <= 10; $i++) {
          $htmlRequest .= "<tr><th>$i</th>";
          for ($j = 0; $j <= 10; $j++) {
              if ($i === 0) {
                  $htmlRequest .= "<td>$j</td>";
              } elseif ($j === 0) {
                  $htmlRequest .= "<td>$i</td>";
              } elseif ($i === $j) {
                  $htmlRequest .= "<td>X</td>";
              } else {
                  $htmlRequest .= "<td>" . ($i * $j) . "</td>";
              }
          }
          $htmlRequest .= '</tr>';
      }

      $htmlRequest .= '</tbody></table>';


        // for ($i = 1;  $i <= 23; $i++){
        // $htmlRequest.= "<th>$i</th>";
        // $htmlRequest.= '</tr>';

        // $htmlRequest.= "<td>$i</td>";
        // }
        // $htmlRequest.= '</table>';

        return $htmlRequest;
    }

}