class Node:
    def __init__(self, value):
        self.value = value
        self.left = None
        self.right = None

root = Node(1)
root.left = Node(2)
root.right = Node(3)
root.left.left = Node(4)
root.left.right = Node(5)

def preorder(root):
    if root:
        print(root.value, end=" ")
        preorder(root.left)
        preorder(root.right)

def inorder(root):
    if root:
        inorder(root.left)
        print(root.value, end=" ")
        inorder(root.right)

def postorder(root):
    if root:
        postorder(root.left)
        postorder(root.right)
        print(root.value, end=" ")

print("Preorder:")
preorder(root)

print()
print("Inorder:")
inorder(root)

print()
print("Postorder:")
postorder(root)
