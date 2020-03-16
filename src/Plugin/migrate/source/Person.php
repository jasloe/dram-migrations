<?php
namespace Drupal\migrations\Plugin\migrate\source;

use Drupal\migrate\Plugin\migrate\source\SqlBase;
use Drupal\migrate\Row;

 /** Source plugin for People (Person)
  *
  * @MigrateSource(
  *  id = "person",
  *  source_module = "migrations",
  * )
*/

class Person extends SqlBase {

 /**
   * {@inheritdoc}
   */
  public function query() {
    $query = $this->select(
      'artist', 'a')
      ->fields('a', [
          'id',
          'name'
        ]);
    return $query;
  }

   /**
   * {@inheritdoc}
   */
  public function fields() {
    $fields = [
      'id' => $this->t('id'),
      'name'   => $this->t('name' )
    ];
    return $fields;
  }

  /**
   * {@inheritdoc}
   */
  public function getIds(){
    return [
      'id' => [
        'type' => 'integer',
        'alias' => 'a'
      ],
    ];
  }
}
?>
