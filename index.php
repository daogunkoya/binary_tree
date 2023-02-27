<?php
class Node {
    public $value;
    public $leftChild;
    public $rightChild;

    public function __construct($value) {
        $this->value = $value;
        $this->leftChild = null;
        $this->rightChild = null;
    }
}

class BinaryTree {
    private $root;

    public function __construct() {
        $this->root = null;
    }

    public function insert($value) {
        $newNode = new Node($value);

        if ($this->root === null) {
            $this->root = $newNode;
        } else {
            $currentNode = $this->root;

            while (true) {
                if ($value < $currentNode->value) {
                    if ($currentNode->leftChild === null) {
                        $currentNode->leftChild = $newNode;
                        break;
                    } else {
                        $currentNode = $currentNode->leftChild;
                    }
                } else {
                    if ($currentNode->rightChild === null) {
                        $currentNode->rightChild = $newNode;
                        break;
                    } else {
                        $currentNode = $currentNode->rightChild;
                    }
                }
            }
        }
    }

    public function search($value) {
        $currentNode = $this->root;

        while ($currentNode !== null) {
            if ($value === $currentNode->value) {
                return true;
            } else if ($value < $currentNode->value) {
                $currentNode = $currentNode->leftChild;
            } else {
                $currentNode = $currentNode->rightChild;
            }
        }

        return false;
    }
}

// Example usage:
$tree = new BinaryTree();

$tree->insert(5);
$tree->insert(3);
$tree->insert(7);
$tree->insert(1);
$tree->insert(4);
$tree->insert(6);
$tree->insert(8);

var_dump($tree->search(6)); // true
var_dump($tree->search(2)); // false














//php8

// class Node {
//     public function __construct(
//         public mixed $value,
//         public ?Node $leftChild = null,
//         public ?Node $rightChild = null
//     ) {}
// }

// class BinaryTree {
//     private ?Node $root = null;

//     public function insert(mixed $value): void {
//         $newNode = new Node($value);

//         if ($this->root === null) {
//             $this->root = $newNode;
//         } else {
//             $currentNode = $this->root;

//             while (true) {
//                 if ($value < $currentNode->value) {
//                     if ($currentNode->leftChild === null) {
//                         $currentNode->leftChild = $newNode;
//                         break;
//                     } else {
//                         $currentNode = $currentNode->leftChild;
//                     }
//                 } else {
//                     if ($currentNode->rightChild === null) {
//                         $currentNode->rightChild = $newNode;
//                         break;
//                     } else {
//                         $currentNode = $currentNode->rightChild;
//                     }
//                 }
//             }
//         }
//     }

//     public function search(mixed $value): bool {
//         $currentNode = $this->root;

//         while ($currentNode !== null) {
//             if ($value === $currentNode->value) {
//                 return true;
//             } else if ($value < $currentNode->value) {
//                 $currentNode = $currentNode->leftChild;
//             } else {
//                 $currentNode = $currentNode->rightChild;
//             }
//         }

//         return false;
//     }
// }

// // Example usage:
// $tree = new BinaryTree();

// $tree->insert(5);
// $tree->insert(3);
// $tree->insert(7);
// $tree->insert(1);
// $tree->insert(4);
// $tree->insert(6);
// $tree->insert(8);

// var_dump($tree->search(6)); // true
// var_dump($tree->search(2)); // false
