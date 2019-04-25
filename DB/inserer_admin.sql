
-- pour transformer une String en Hash:
-- https://bcrypt-generator.com/
-- note: le mot de passe c'est "test"
INSERT INTO administrateurs (nom, mot_de_passe) VALUES ('test', '$2y$12$3ITydFjmbx..AZd/6R0U4.JJE5sZEiYNL/3clSLoXR6HEobddKQIe');
COMMIT;
