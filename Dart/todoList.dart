import 'dart:io';

void main() {
  List<String> todoList = [];

  while (true) {
    print('\n==== TO-DO LIST MENU ====');
    print('1. Add Task');
    print('2. View Tasks');
    print('3. Remove Task');
    print('4. Exit');
    stdout.write('Enter your choice: ');


    String? choice = stdin.readLineSync();

    switch (choice) {
      case '1':
        stdout.write('Enter task: ');
        String? task = stdin.readLineSync();
        if (task != null && task.isNotEmpty) {
          todoList.add(task);
          print('Task added!');
        }
        break;

      case '2':
        if (todoList.isEmpty) {
          print('No tasks available.');
        } else {
          print('\nYour Tasks:');
          for (int i = 0; i < todoList.length; i++) {
            print('${i + 1}. ${todoList[i]}');
          }
        }
        break;

      case '3':
        stdout.write('Enter task number to remove: ');
        int? index = int.tryParse(stdin.readLineSync() ?? '');
        if (index != null &&
            index > 0 &&
            index <= todoList.length) {
          todoList.removeAt(index - 1);
          print('Task removed!');
        } else {
          print('Invalid task number.');
        }
        break;

      case '4':
        print('Exiting To-Do List. Goodbye!');
        return;

      default:
        print('Invalid choice. Try again.');
    }
  }
}